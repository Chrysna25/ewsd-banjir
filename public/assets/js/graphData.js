var ctx_ultrasonic = document.getElementById("chart-line-ultrasonic").getContext("2d");
var gradientStroke1 = ctx_ultrasonic.createLinearGradient(0, 230, 0, 50);
gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)');

var ctx_flowmeter = document.getElementById("chart-line-flowmeter").getContext("2d");
var gradientStroke2 = ctx_flowmeter.createLinearGradient(0, 230, 0, 50);
gradientStroke2.addColorStop(1, 'rgba(203,12,159,0.2)');
gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
gradientStroke2.addColorStop(0, 'rgba(203,12,159,0)');

function updateChartUltrasonic() {
    new Chart(ctx_ultrasonic, {
        type: "line",
        data: {
            // labels: timestamps,
            labels: [1, 2, 3, 4, 5, 6, 7, 8, 9],
            datasets: [{
                label: "Mobile apps",
                tension: 0.4,
                borderWidth: 0,
                pointRadius: 0,
                borderColor: "#cb0c3f",
                borderWidth: 3,
                backgroundColor: gradientStroke1,
                fill: true,
                // data: values,
                data: [100, 200, 300, 400, 500, 600, 700, 800, 900],
                maxBarThickness: 6
            }],
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
                        color: '#000000',
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
                        color: '#000000',
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
}

function updateHistoryData() {
    // Make an AJAX request to get real-time data
    $.ajax({
        url: '/get-ultrasonic-history',
        method: 'GET',
        success: function (data) {
            // Check if the data is not empty
            if (data && data.data && data.data.length > 0) {
                // Extract timestamps and values from the received data
                const timestamps = data.data.map(entry => entry.ts);
                const values = data.data.map(entry => entry.value);

                // Update the chart
                // updateChartUltrasonic(timestamps, values);
                updateChartUltrasonic();
            } else {
                console.warn('Empty data received.');
                updateChartUltrasonic();
            }
        },
        error: function (error) {
            console.error('Error fetching real-time data:', error);
        }
    });
}

// Call the updateHistoryData function to initialize the chart
updateHistoryData();

function updateChartFlowmeter() {
    new Chart(ctx_flowmeter, {
        type: "line",
        data: {
            // labels: timestamps,
            labels: [1, 2, 3, 4, 5, 6, 7, 8, 9],
            datasets: [{
                label: "Mobile apps",
                tension: 0.4,
                borderWidth: 0,
                pointRadius: 0,
                borderColor: "#cb0c3f",
                borderWidth: 3,
                backgroundColor: gradientStroke2,
                fill: true,
                // data: values,
                data: [100, 200, 300, 400, 500, 600, 700, 800, 900],
                maxBarThickness: 6
            }],
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
                        color: '#000000',
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
                        color: '#000000',
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
}

function updateHistoryData2() {
    // Make an AJAX request to get real-time data
    $.ajax({
        url: '/get-flowmeter-history',
        method: 'GET',
        success: function (data) {
            // Check if the data is not empty
            if (data && data.data && data.data.length > 0) {
                // Extract timestamps and values from the received data
                const timestamps = data.data.map(entry => entry.ts);
                const values = data.data.map(entry => entry.value);

                // Update the chart
                // updateChartFlowmeter(timestamps, values);
                updateChartFlowmeter();
            } else {
                console.warn('Empty data received.');
                updateChartFlowmeter();
            }
        },
        error: function (error) {
            console.error('Error fetching real-time data:', error);
        }
    });
}

// Call the updateHistoryData function to initialize the chart
updateHistoryData2();