@include('layouts.header')

<body class="g-sidenav-show  bg-gray-100">
    <!-- Sidebar -->
    @include('layouts.sidebar')
    <!-- Sidebar -->

    <main class="">

        <!-- Navbar -->
        @include('layouts.navbar')
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row mt-4 px-3 cssanimation sequence fadeInBottom">
                <div class="card bg-gradient-info">
                    <div class="card-body p-3">
                        <h1>THIS IS KELOMPOK 5</h1>
                        <img src="" alt="">
                        <img src="" alt="">
                        <img src="" alt="">
                        <img src="" alt="">

                        <h1>PARTNER</h1>
                        <P>KARTANAGARI GROUP</P>
                        <P>UG TECHNOPARK</P>
                        <P>KAMPUS MERDEKA</P>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            @include('layouts.footer')

        </div>
    </main>

    <!--   Core JS Files   -->
    @include('layouts.script')
</body>

</html>
