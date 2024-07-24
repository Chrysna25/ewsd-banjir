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
                        <h1 class="font-weight-bolder mb-0 text-light"
                            style="text-shadow: 1px 1px 2px rgba(0, 0, 0, 1); text-align: center; font-family: helvetica, roboto;">
                            Apa itu EWSD?

                        </h1>

                        <h5
                            style=" color: white; text-shadow: 1px 1px 2px rgba(0, 0, 0, 1); text-light; text-align: center; font-family: helvetica, roboto;">
                            Early Warning System Disaster (EWSD) adalah platform online berbasis web yang menyediakan
                            informasi peringatan dini terkait
                            bencana alam dan ancaman bencana lainnya. Melalui website ini, pengguna dapat mengakses
                            informasi terbaru
                            tentang kondisi cuaca, ketinggian air, kecepatan arus, dan debit air dari lokasi sungai yang
                            telah ditargetkan. Website ini memberikan
                            akses cepat dan mudah ke data real-time, menyajikan data dalam format yang jelas dan mudah
                            dimengerti.
                            Pengguna dapat memantau status keadaan sekitarnya dan menerima peringatan yang relevan untuk
                            mengambil tindakan pencegahan.
                        </h5>

                        <br>

                        <h1 class="font-weight-bolder mb-0 text-light"
                            style="text-shadow: 1px 1px 2px rgba(0, 0, 0, 1); text-align: center; font-family: helvetica, roboto;">
                            Tujuan Pembuatan EWSD
                        </h1>
                        <h5
                            style=" color: white; text-shadow: 1px 1px 2px rgba(0, 0, 0, 1); text-light; text-align: center; font-family: helvetica, roboto;">
                            Tujuan utama dari pembuatan Early Warning System Disaster adalah untuk melindungi dan
                            memperingatkan
                            masyarakat terhadap potensi bahaya atau ancaman secepat mungkin, khususnya bencana banjir.
                            Dengan memberikan informasi
                            dini, sistem ini memungkinkan masyarakat, pemerintah, dan organisasi terkait untuk mengambil
                            tindakan pencegahan atau evakuasi yang diperlukan, sehingga mengurangi dampak negatif yang
                            mungkin timbul dari suatu peristiwa.
                        </h5>

                        <br>

                        <h1 class="font-weight-bolder mb-0 text-light"
                            style="text-shadow: 1px 1px 2px rgba(0, 0, 0, 1); text-align: center; font-family: helvetica, roboto;">
                            Developer
                        </h1>

                        <h5
                            style=" color: white; text-shadow: 1px 1px 2px rgba(0, 0, 0, 1); 
                                text-light; text-align: center; font-family: helvetica, roboto;">
                            Dalam projek kerja magang bersama Kartanagari Group dan Universitas Gunadarma.
                            untuk merancang, mengembangkan platform EWSD agar dapat memberikan layanan
                            yang andal dan efektif.
                            <br> 
                            <br>
                            Projek ini dikembangkan oleh tim yang terdiri dari :
                            <br>
                            <br>
                            <ul style="list-style-type: none; padding: 0;">
                                <li>Sandy Suryo Prayogo, S.T., M.T. (Dosen Pendamping)</li>
                                <li>Dede Dwi Wira Putra/Ketua Tim (50420346)</li>
                                <li>Chrysna Rinaldy Maturbongs (50421311)</li>
                                <li>Dimas Fauzian As’aryanda (50421387)</li>
                                <li>Ilham Azhar Ramadan (50421637)</li>
                            </ul>
                        </h5>
                        <br>

                        <h4
                        style=" color: white; text-shadow: 1px 1px 2px rgba(0, 0, 0, 1); 
                        text-light; text-align: center; font-family: helvetica, roboto;">
                            Bekerja sama 
                        </h4>
                        <div style="flex: 1; display: flex; justify-content: center;">
                            <!-- Gambar pertama -->
                            <img src="https://blog-edutore-partner.s3.ap-southeast-1.amazonaws.com/wp-content/uploads/2020/05/25120309/logo-universitas-gunadarma.png"
                                alt="Deskripsi gambar" class="img-fluid" style="width: 50px; height: 50px;">

                            <!-- Gambar kedua -->
                            <div class="ktng">
                                <img width="75px" src="../assets/img/ktng.png">
                            </div>

                            <!-- Gambar ketiga -->
                            <img src="https://blogger.googleusercontent.com/img/a/AVvXsEiRJsxzHxwLAkJkg7kdLYgCxy5AGTv49klbnKTnvI-K_U1uhq47CDz1tvy8ZByh15ZxpAcGjqPLNO72wsZhG2PByLvd5dni15ELA_0WkFUxfiGBJ-pLVXGibHMNbZCDEyQZ0-nCmeokMYK_PJyoJ_jwyMcg0eCPSonmabwBDsNuT9rgJQEFClyvuuoE=s16000"
                                alt="Deskripsi gambar kedua" class="img-fluid"
                                style="margin-left: 10px; width: 100px; height: 50px;">
                        </div>


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
