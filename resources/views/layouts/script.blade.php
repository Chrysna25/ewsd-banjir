<!--   Core JS Files   -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="{{ asset('/assets/js/core/popper.min.js')}}"></script>
<script src="{{ asset('/assets/js/core/bootstrap.min.js')}}"></script>
<script src="{{ asset('/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
<script src="{{ asset('/assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
<script src="{{ asset('/assets/js/plugins/chartjs.min.js')}}"></script>
<script src="{{ asset('/assets/js/getWeather.js') }}"></script>
<script src="{{ asset('/assets/js/ajaxSensorData.js') }}"></script>
<script src="{{ asset('/assets/js/graphData.js') }}"></script>
<script src="{{ asset('/assets/js/animation.js') }}"></script>

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
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>