<!--   Core JS Files   -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="{{ asset('/assets/js/core/popper.min.js')}}"></script>
<script src="{{ asset('/assets/js/core/bootstrap.min.js')}}"></script>
<script src="{{ asset('/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
<script src="{{ asset('/assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
<script src="{{ asset('/assets/js/plugins/chartjs.min.js')}}"></script>
<script src="{{ asset('/assets/js/getWeather.js') }}"></script>
<script src="{{ asset('/assets/js/ajaxSensorData.js') }}"></script>
<script>
  var ctx2 = document.getElementById("chart-line").getContext("2d");

  var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

  gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
  gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
  gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

  var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

  gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
  gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
  gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

  new Chart(ctx2, {
    type: "line",
    data: {
      labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
      datasets: [{
          label: "Mobile apps",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#cb0c3f",
          borderWidth: 3,
          backgroundColor: gradientStroke1,
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        },
        {
          label: "Websites",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#3A416F",
          borderWidth: 3,
          backgroundColor: gradientStroke2,
          fill: true,
          data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
          maxBarThickness: 6
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        }
      },
      interaction: {
        intersect: false,
        mode: 'index',
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5]
          },
          ticks: {
            display: true,
            padding: 10,
            color: '#b2b9bf',
            font: {
              size: 11,
              family: "Open Sans",
              style: 'normal',
              lineHeight: 2
            },
          }
        },
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
            borderDash: [5, 5]
          },
          ticks: {
            display: true,
            color: '#b2b9bf',
            padding: 20,
            font: {
              size: 11,
              family: "Open Sans",
              style: 'normal',
              lineHeight: 2
            },
          }
        },
      },
    },
  });
</script>
<script>
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }
</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.7"></script>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const needle = document.querySelector(".needle");

    // Fungsi untuk mengatur sudut jarum
    function setNeedle(angle) {
      needle.style.transform = `translateX(-50%) rotate(${angle}deg)`;
    }

    // Misalnya, ambil nilai dari suatu sumber, seperti API atau formulir
    // Di sini kita mengatur nilai secara acak sebagai contoh
    const randomValue = Math.floor(Math.random() * 100); // Nilai acak antara 0 dan 100
    const percent = (randomValue / 100) * 180; // Skala ke sudut 180 derajat

    setNeedle(percent);
  });
</script>

<script>
  // Change this Value to set the percentage
  let totalRot = ((100 / 100) * 180 * Math.PI) / 180;

  let rotation = 0;
  let canvas = null;
  let ctx = null;
  let text = document.querySelector(".text");
  canvas = document.getElementById("canvas");
  ctx = canvas.getContext("2d");
  setTimeout(requestAnimationFrame(animate), 1500);

  function calcPointsCirc(cx, cy, rad, dashLength) {
    var n = rad / dashLength,
      alpha = (Math.PI * 2) / n,
      pointObj = {},
      points = [],
      i = -1;

    while (i < n) {
      var theta = alpha * i,
        theta2 = alpha * (i + 1);

      points.push({
        x: Math.cos(theta) * rad + cx,
        y: Math.sin(theta) * rad + cy,
        ex: Math.cos(theta2) * rad + cx,
        ey: Math.sin(theta2) * rad + cy
      });
      i += 2;
    }
    return points;
  }

  function animate() {
    // Clearing animation on every iteration
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    const center = {
      x: 175,
      y: 175
    };

    // Main arc
    ctx.beginPath();
    ctx.strokeStyle = getSpeedometerColor(rotation);
    ctx.lineWidth = "3";
    let radius = 174;
    ctx.arc(center.x, center.y, radius, Math.PI, Math.PI + rotation);
    ctx.stroke();

    // Red Arc
    if (rotation <= 0.75 * Math.PI) {
      ctx.beginPath();
      ctx.strokeStyle = "#ff0505";
      ctx.lineWidth = "3";
      ctx.arc(center.x, center.y, radius, 1.75 * Math.PI, 0);
      ctx.stroke();
    }

    // Functions to draw dotted lines
    const DrawDottedLine = (x1, y1, x2, y2, dotRadius, dotCount, dotColor) => {
      var dx = x2 - x1;
      var dy = y2 - y1;
      let slopeOfLine = dy / dx;
      var degOfLine =
        Math.atan(slopeOfLine) * (180 / Math.PI) > 0 ?
        Math.atan(slopeOfLine) * (180 / Math.PI) :
        180 + Math.atan(slopeOfLine) * (180 / Math.PI);
      var degOfNeedle = rotation * (180 / Math.PI);

      if (rotation >= 0.75 * Math.PI) {
        dotColor = degOfLine <= degOfNeedle ? "#ff0505" : "#ff0505";
      } else {
        dotColor = degOfLine <= degOfNeedle ? dotColor : getSpeedometerColor(rotation);
      }
      var spaceX = dx / (dotCount - 1);
      var spaceY = dy / (dotCount - 1);
      var newX = x1;
      var newY = y1;
      for (var i = 0; i < dotCount; i++) {
        dotRadius = dotRadius >= 0.75 ? dotRadius - i * (0.5 / 15) : dotRadius;
        drawDot(newX, newY, dotRadius, `${dotColor}${100 - (i + 1)}`);
        newX += spaceX;
        newY += spaceY;
      }
    };
    const drawDot = (x, y, dotRadius, dotColor) => {
      ctx.beginPath();
      ctx.arc(x, y, dotRadius, 0, 2 * Math.PI, false);
      ctx.fillStyle = dotColor;
      ctx.fill();
    };
    let firstDottedLineDots = calcPointsCirc(center.x, center.y, 165, 1);
    for (let k = 0; k < firstDottedLineDots.length; k++) {
      let x = firstDottedLineDots[k].x;
      let y = firstDottedLineDots[k].y;
      DrawDottedLine(x, y, 175, 175, 1.75, 30, getSpeedometerColor(rotation));
    }

    // Dummy circle to hide the line connecting to center
    ctx.beginPath();
    ctx.arc(center.x, center.y, 80, 2 * Math.PI, 0);
    ctx.fillStyle = "black";
    ctx.fill();

    // Speedometer triangle
    var x = -75,
      y = 0;
    ctx.save();
    ctx.beginPath();
    ctx.translate(175, 175);
    ctx.rotate(rotation);
    ctx.moveTo(x, y);
    ctx.lineTo(x + 10, y - 10);
    ctx.lineTo(x + 10, y + 10);
    ctx.closePath();
    ctx.fillStyle = getSpeedometerColor(rotation);
    ctx.fill();
    ctx.restore();

    if (rotation < totalRot) {
      rotation += (1 * Math.PI) / 180;
      if (rotation > totalRot) {
        rotation -= (1 * Math.PI) / 180;
      }
    }

    text.innerHTML = Math.round((rotation / Math.PI) * 100) + 0 + "%";
    requestAnimationFrame(animate);
  }

  function getSpeedometerColor(rotation) {
    const percentage = (rotation / totalRot) * 100;

    if (percentage <= 40) {
      // Green color for the first 40%
      return "#05ff1a";
    } else if (percentage <= 70) {
      // Yellow color for the next 30%
      return "#fff705";
    } else {
      // Red color for the last 30%
      return "#ff0505";
    }
  }
</script>
