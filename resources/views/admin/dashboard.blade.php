@include('layouts.header')

<body class="g-sidenav-show  bg-gray-100">
  <!-- Sidebar -->
  @include('layouts.sidebar')
  <!-- Sidebar -->

  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

    <!-- Navbar -->
    @include('layouts.navbar')
    <!-- End Navbar -->

    <div class="container-fluid py-4">

      <!-- Weather -->
      <div class="row">
        @foreach ($cities as $Cianjur => $cityData)
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card bg-gradient-info">
            <div class="card-body p-3">
              <div class="row">
                <div class="weather-container">
                  <p id="weather-city">{{$cityData -> name}}</p>
                  <div id="weather-icon">
                    <img src='http://openweathermap.org/img/w/{{$cityData->weather[0]->icon}}.png' alt="Weather Icon">
                  </div>
                  <div id="weather-description">{{$cityData -> weather[0]->description}}</div>
                  <div id="temperature">{{$cityData -> main->temp}}</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>

      <!-- Alert -->
      <div class="row mt-4">
        <div class="col-xl-12 mb-xl-0 mb-4">
          <!-- Outer Card -->
          <div class="card bg-gradient-info">
            <!-- Outer Card Body -->
            <div class="card-body p-3">
              <div class="row">
                <!-- Inner Card 1 -->
                <div class="col-md-6 mb-4">
                  <div class="card shadow">
                    <!-- Inner Card Body 1 -->
                    <div class="card-body p-3 text-center">
                      <div class="numbers">
                        <div class="row">
                          <div class="col-8">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold text-dark">KETINGGIAN AIR</p>
                            <h5 class="font-weight-bolder mb-0 text-dark">
                              5,3m
                            </h5>
                          </div>
                          <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-success
                             shadow text-center border-radius-md">
                              <i class="ni ni-bold-up text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Inner Card Body 1 -->
                  </div>
                </div>
                <!-- End Inner Card 1 -->

                <!-- Inner Card 2 -->
                <div class="col-md-6 mb-4">
                  <div class="card shadow">
                    <!-- Inner Card Body 2 -->
                    <div class="card-body p-3 text-center">
                      <div class="numbers">
                        <div class="row">
                          <div class="col-8">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold text-dark">KECEPATAN AIR</p>
                            <h5 class="font-weight-bolder mb-0 text-dark">
                              3,2m/s
                            </h5>
                          </div>
                          <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-success shadow text-center border-radius-md">
                              <i class="ni ni-sound-wave text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Inner Card Body 2 -->
                  </div>
                </div>
                <!-- End Inner Card 2 -->

                <!-- Inner Card 3 -->
                <div class="col-md-6 mx-auto mb-4">
                  <div class="card">
                    <!-- Inner Card Body 3 -->

                    <div class="card-body p-3 text-center">
                      <div class="numbers">
                        <h5 class="font-weight-bolder mb-0 text-dark">
                          AMAN
                        </h5>
                      </div>
                    </div>

                    <div class="card-body p-3 text-center">
                      <div class="numbers">
                        <h5 class="font-weight-bolder mb-0 text-dark">
                          SIAGA
                        </h5>
                      </div>
                    </div>

                    <div class="card-body p-3 text-center">
                      <div class="numbers">
                        <h5 class="font-weight-bolder mb-0 text-dark">
                          WASPADA
                        </h5>
                      </div>
                    </div>

                    <div class="card-body p-3 text-center">
                      <div class="numbers">
                        <h5 class="font-weight-bolder mb-0 text-dark">
                          BAHAYA
                        </h5>
                      </div>
                    </div>

                    <!-- End Inner Card Body 3 -->
                  </div>
                </div>
                <!-- End Inner Card 3 -->
              </div>
            </div>
            <!-- End Outer Card Body -->
          </div>
          <!-- End Outer Card -->
        </div>
      </div>
      <!-- Akghir Alert-->

      <!-- Graph -->
      <div class="container-fluid py-2 mt-2">
        <!-- Mengurangi padding di container -->
        <div class="row mt-2">
          <!-- Mengurangi margin-top di row -->
          <div class="col-lg-6">
            <div class="card z-index-2">
              <div class="card-header pb-0">
                <h6>Graphic</h6>
                <p class="text-sm">
                  <span class="font-weight-bold">4% lebih tinggi</span> pada 2021
                </p>
              </div>
              <div class="card-body p-2">
                <!-- Mengurangi padding di card-body -->
                <div class="chart">
                  <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card z-index-2">
              <div class="card-header pb-0">
                <h6>Graphic</h6>
                <p class="text-sm">
                  <span class="font-weight-bold">4% lebih tinggi</span> pada 2021
                </p>
              </div>
              <div class="card-body p-2">
                <!-- Mengurangi padding di card-body -->
                <div class="chart">
                  <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Akhir Graph -->



      <!-- Footer -->
      @include('layouts.footer')

    </div>
  </main>

  <!--   Core JS Files   -->
  @include('layouts.script')
</body>

</html>