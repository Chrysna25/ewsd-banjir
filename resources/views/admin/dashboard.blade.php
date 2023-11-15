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
                              <span class="text-success text-sm font-weight-bolder">+55%</span>
                            </h5>
                          </div>
                          <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-info shadow text-center border-radius-md">
                              <i class="ni ni-umbrella-13 text-lg opacity-10" aria-hidden="true"></i>
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
                            <p class="text-sm mb-0 text-capitalize font-weight-bold text-dark">KECEPATAN AIRS</p>
                            <h5 class="font-weight-bolder mb-0 text-dark">
                              3,2m/s
                              <span class="text-success text-sm font-weight-bolder">+30%</span>
                            </h5>
                          </div>
                          <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-success shadow text-center border-radius-md">
                              <i class="ni ni-chart-bar-32 text-lg opacity-10" aria-hidden="true"></i>
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
      <div class="container-fluid py-2"> <!-- Mengurangi padding di container -->
    <div class="row mt-2"> <!-- Mengurangi margin-top di row -->
        <div class="col-lg-6">
            <div class="chart">
                <canvas id="chart-bars" class="chart-canvas" height="100"></canvas>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="chart">
                <canvas id="chart-bars" class="chart-canvas" height="100"></canvas>
            </div>
        </div>
    </div>

    <div class="row mt-2"> <!-- Mengurangi margin-top di row -->
        <div class="col-lg-6">
            <div class="card z-index-2">
                <div class="card-header pb-0">
                    <h6>Graphic</h6>
                    <p class="text-sm">
                        <i class="fa fa-arrow-up text-success"></i>
                        <span class="font-weight-bold">4% lebih tinggi</span> pada 2021
                    </p>
                </div>
                <div class="card-body p-2"> <!-- Mengurangi padding di card-body -->
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
                        <i class="fa fa-arrow-up text-success"></i>
                        <span class="font-weight-bold">4% lebih tinggi</span> pada 2021
                    </p>
                </div>
                <div class="card-body p-2"> <!-- Mengurangi padding di card-body -->
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


  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg ">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Soft UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-info active" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-info w-100 px-3 mb-2 active" data-class="bg-transparent"
            onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-info w-100 px-3 mb-2 ms-2" data-class="bg-white"
            onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3">
          <h6 class="mb-0">Navbar Fixed</h6>
        </div>
        <div class="form-check form-switch ps-0">
          <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
        </div>
        <hr class="horizontal dark my-sm-4">
        <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/soft-ui-dashboard">Free
          Download</a>
        <a class="btn btn-outline-dark w-100"
          href="https://www.creative-tim.com/learning-lab/bootstrap/license/soft-ui-dashboard">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/soft-ui-dashboard"
            data-icon="octicon-star" data-size="large" data-show-count="true"
            aria-label="Star creativetimofficial/soft-ui-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Soft%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard"
            class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/srer.php?u=https://www.creative-tim.com/product/soft-ui-dashboard"
            class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  @include('layouts.script')
</body>

</html>