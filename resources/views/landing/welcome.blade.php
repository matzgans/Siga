@extends('landing')

@Section('content')
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>Sistem Informasi Gender dan Anak</h1>
                    <p class="text-white">Data terpilah Gender dan Anak di Bone Bolango berfungsi untuk memotret tingkat
                        keberhasilan pembangunan pemberdayaan perempuan, perlindungan perempuan dan anak melalui
                        strategi Pengarusutamaan Gender (PUG) dan Pengarusutamaan Hak Anak (PUHA).</p>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="#about" class="btn-get-started scrollto">Data Analisis</a>
                        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i
                                class="bi bi-play-circle"></i><span>Watch Video</span></a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="assets/img/ibu_anak.png" class="img-fluid animated" width="450px" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg">
            <div class="container">

                <div class="row" data-aos="zoom-in">

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{asset('logo')}}/logo1.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
                    </div>


                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
                    </div>

                </div>

            </div>
        </section><!-- End Cliens Section -->

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>About Us</h2>
                </div>

                <div class="row content">
                    <div class="col-lg-12 col-md-12">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias nulla ut distinctio possimus
                            doloremque non quasi assumenda? Voluptatem quibusdam, molestiae, unde sequi aliquam excepturi
                            laborum magni illo hic assumenda qui. Ex iusto odio, fugiat delectus doloremque placeat
                            distinctio nam quos atque voluptatum ea. Rem, debitis pariatur! Quidem in pariatur facilis.
                        </p>
                    </div>

                </div>
        </section><!-- End About Us Section -->

        {{-- <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us section-bg">
            <div class="container-fluid" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                        <div class="content">
                            <h3>Eum ipsam laborum deleniti <strong>velit pariatur architecto aut nihil</strong></h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                            </p>
                        </div>

                        <div class="accordion-list">
                            <ul>
                                <li>
                                    <a data-bs-toggle="collapse" class="collapse"
                                        data-bs-target="#accordion-list-1"><span>01</span> Non consectetur a erat nam
                                        at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                                        <p>
                                            Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus
                                            laoreet non curabitur gravida. Venenatis lectus magna fringilla urna
                                            porttitor rhoncus dolor purus non.
                                        </p>
                                    </div>
                                </li>

                                <li>
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2"
                                        class="collapsed"><span>02</span> Feugiat scelerisque varius morbi enim nunc?
                                        <i class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                        <p>
                                            Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id
                                            interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus
                                            scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper
                                            dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                                        </p>
                                    </div>
                                </li>

                                <li>
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3"
                                        class="collapsed"><span>03</span> Dolor sit amet consectetur adipiscing elit?
                                        <i class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                                        <p>
                                            Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci.
                                            Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet
                                            nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis
                                            convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio
                                            morbi quis
                                        </p>
                                    </div>
                                </li>

                            </ul>
                        </div>

                    </div>

                    <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
                        style='background-image: url("assets/img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">
                        &nbsp;</div>
                </div>

            </div>
        </section><!-- End Why Us Section -->

        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                        <img src="assets/img/skills.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                        <h3>Voluptatem dignissimos provident quasi corporis voluptates</h3>
                        <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore
                            magna aliqua.
                        </p>

                        <div class="skills-content">

                            <div class="progress">
                                <span class="skill">HTML <i class="val">100%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">CSS <i class="val">90%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">JavaScript <i class="val">75%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">Photoshop <i class="val">55%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End Skills Section --> --}}

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Index Pembangunan Gender</h2>
                    <p>Istilah Gender digunakan untuk menjelaskan perbedaan peran perempuan dan laki-laki yang bersifat
                        bawaan sebagai ciptaan Tuhan. Gender adalah pembedaan peran, kedudukan, tanggung jawab, dan
                        pembagian kerja antara laki-laki dan perempuan yang ditetapkan oleh masyarakat berdasarkan sifat
                        perempuan dan laki-laki yang dianggap pantas menurut norma, adat istiadat, kepercayaan atau
                        kebiasaan masyarakat.

                        Gender tidak sama dengan kodrat. Kodrat adalah sesuatu yang ditetapkan oleh Tuhan YME, sehingga
                        manusia tidak mampu untuk merubah atau menolak. Sementara itu, kodrat bersifat universal, misalnya
                        melahirkan, menstruasi dan menyusui adalah kodrat bagi perempuan, sementara mempunyai sperma adalah
                        kodrat bagi laki-laki.

                        Ketidakadilan gender merupakan kondisi tidak adil akibat dari sistem dan struktur sosial, sehingga
                        perempuan maupun laki-laki menjadi korban dari pada sistem tersebut. Laki-laki dan perempuan berbeda
                        hanya karena kodrat antara laki-laki dan perempuan berbeda. Keadilan gender akan dapat terjadi jika
                        tercipta suatu kondisi di mana porsi dan siklus sosial perempuan dan laki-laki setara, serasi,
                        seimbang dan harmonis.</p>
                </div>

                <div class="row">
                    <div class="col-12" data-aos="zoom-in" data-aos-delay="100">
                        <div class="card">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                        data-bs-target="#ipg" type="button" role="tab" aria-controls="home"
                                        aria-selected="true">IPG</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#dataTerpilah" type="button" role="tab" aria-controls="profile"
                                        aria-selected="false">Data Terpilah</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                        data-bs-target="#kekerasan" type="button" role="tab" aria-controls="contact"
                                        aria-selected="false">Kekerasan</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                        data-bs-target="#sdaLingkungan" type="button" role="tab"
                                        aria-controls="contact" aria-selected="false">SDA Lingkungan</button>
                                </li>
                            </ul>
                            <div class="card-body">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="ipg" role="tabpanel"
                                        aria-labelledby="home-tab">
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                                    data-bs-target="#presentasePenduduk" type="button" role="tab"
                                                    aria-controls="nav-home" aria-selected="true">Presentase
                                                    Penduduk</button>
                                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                                    data-bs-target="#jenisKelamin" type="button" role="tab"
                                                    aria-controls="nav-profile" aria-selected="false">Jenis
                                                    Kelamin</button>
                                                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                                    data-bs-target="#kelompokUmur" type="button" role="tab"
                                                    aria-controls="nav-contact" aria-selected="false">Kelompok
                                                    Umur</button>
                                                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                                    data-bs-target="#pendidikanTerakhir" type="button" role="tab"
                                                    aria-controls="nav-contact" aria-selected="false">Pendidikan
                                                    Terakhir</button>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="presentasePenduduk"
                                                role="tabpanel" aria-labelledby="nav-home-tab">
                                                <div class="tab-pane fade show active" id="bidangKesehatan"
                                                    role="tabpanel" aria-labelledby="nav-home-tab">
                                                    <h3 class="text-center mt-3">Data Presentase Penduduk</h3>
                                                    <hr class="mx-5">
                                                    <div class="row">
                                                        <div class="col">
                                                            <div id="barchart_klasprespend"></div>
                                                        </div>
                                                        <div class="col">
                                                            <div id="piechart_klasprespend"></div>
                                                        </div>
                                                    </div>
                                                    <div class="row mx-5 mb-3">
                                                        <div class="col">
                                                            <div id="logaritma_klasprespend"></div>
                                                        </div>
                                                    </div>
                                                    <h3 class="text-center mt-3">Data Kematian Bayi</h3>
                                                    <hr class="mx-5">
                                                    <div class="row">
                                                        <div class="col">
                                                            <div id="barchart_kmtbayi"></div>
                                                        </div>
                                                        <div class="col">
                                                            <div id="piechart_kmtbayi"></div>
                                                        </div>
                                                    </div>
                                                    <div class="row mx-5 mb-3">
                                                        <div class="col">
                                                            <div id="logaritma_kmtbayi"></div>
                                                        </div>
                                                    </div>
                                                    <h3 class="text-center mt-3">Data HIV</h3>
                                                    <hr class="mx-5">
                                                    <div class="row">
                                                        <div class="col">
                                                            <div id="barchart_hiv"></div>
                                                        </div>
                                                        <div class="col">
                                                            <div id="piechart_hiv"></div>
                                                        </div>
                                                    </div>
                                                    <div class="row mx-5 mb-3">
                                                        <div class="col">
                                                            <div id="logaritma_hiv"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="jenisKelamin" role="tabpanel"
                                                aria-labelledby="nav-profile-tab">Jenis Kelamin</div>
                                            <div class="tab-pane fade" id="kelompokUmur" role="tabpanel"
                                                aria-labelledby="nav-contact-tab">Kelompok Umur</div>
                                            <div class="tab-pane fade" id="pendidikanTerakhir" role="tabpanel"
                                                aria-labelledby="nav-contact-tab">Pendidikan Terakhir</div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="dataTerpilah" role="tabpanel"
                                        aria-labelledby="profile-tab">
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <button class="nav-link active" id="nav-kesehatan" data-bs-toggle="tab"
                                                    data-bs-target="#kesehatan" type="button" role="tab"
                                                    aria-controls="nav-kesehatan" aria-selected="true">Bidang
                                                    Kesehatan</button>
                                                <button class="nav-link" id="nav-pendidikan" data-bs-toggle="tab"
                                                    data-bs-target="#pendidikan" type="button" role="tab"
                                                    aria-controls="nav-pendidikan" aria-selected="false">Bidang
                                                    Pendidikan</button>
                                                <button class="nav-link" id="nav-sda" data-bs-toggle="tab"
                                                    data-bs-target="#sda" type="button" role="tab"
                                                    aria-controls="nav-contact" aria-selected="false">Bidang SDA
                                                    Lingkungan</button>
                                                <button class="nav-link" id="nav-ekonomi" data-bs-toggle="tab"
                                                    data-bs-target="#ekonomi" type="button" role="tab"
                                                    aria-controls="nav-contact" aria-selected="false">Bidang
                                                    Ekonomi</button>
                                                <button class="nav-link" id="nav-politik" data-bs-toggle="tab"
                                                    data-bs-target="#politik" type="button" role="tab"
                                                    aria-controls="nav-contact" aria-selected="false">Bidang
                                                    Politik</button>
                                                <button class="nav-link" id="nav-hukum" data-bs-toggle="tab"
                                                    data-bs-target="#hukum" type="button" role="tab"
                                                    aria-controls="nav-contact" aria-selected="false">Bidang
                                                    Hukum</button>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="kesehatan" role="tabpanel"
                                                aria-labelledby="nav-kesehatan">
                                                <h3 class="text-center mt-3">Data Kematian Ibu Hamil</h3>
                                                <hr class="mx-5">
                                                <div class="row">
                                                    <div class="col">
                                                        <div id="container"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div id="piechart"></div>
                                                    </div>
                                                </div>
                                                <div class="row mx-5 mb-3">
                                                    <div class="col">
                                                        <div id="logaritmaAxis"></div>
                                                    </div>
                                                </div>
                                                <h3 class="text-center mt-3">Data Kematian Bayi</h3>
                                                <hr class="mx-5">
                                                <div class="row">
                                                    <div class="col">
                                                        <div id="barchart_kmtbayi"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div id="piechart_kmtbayi"></div>
                                                    </div>
                                                </div>
                                                <div class="row mx-5 mb-3">
                                                    <div class="col">
                                                        <div id="logaritma_kmtbayi"></div>
                                                    </div>
                                                </div>
                                                <h3 class="text-center mt-3">Data HIV</h3>
                                                <hr class="mx-5">
                                                <div class="row">
                                                    <div class="col">
                                                        <div id="barchart_hiv"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div id="piechart_hiv"></div>
                                                    </div>
                                                </div>
                                                <div class="row mx-5 mb-3">
                                                    <div class="col">
                                                        <div id="logaritma_hiv"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="pendidikan" role="tabpanel"
                                                aria-labelledby="nav-pendidikan">
                                                <h3 class="text-center mt-3">Data Partisipasi Sekolah</h3>
                                                <hr class="mx-5">
                                                <div class="row">
                                                    <div class="col">
                                                        <div id="barchart_partSekolah"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div id="piechart_partSekolah"></div>
                                                    </div>
                                                </div>
                                                <div class="row mx-5 mb-3">
                                                    <div class="col">
                                                        <div id="logaritma_partSekolah"></div>
                                                    </div>
                                                </div>
                                                <h3 class="text-center mt-3">Data Putus Sekolah</h3>
                                                <hr class="mx-5">
                                                <div class="row">
                                                    <div class="col">
                                                        <div id="barchart_ptsSekolah"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div id="piechart_ptsSekolah"></div>
                                                    </div>
                                                </div>
                                                <div class="row mx-5 mb-3">
                                                    <div class="col">
                                                        <div id="logaritma_ptsSekolah"></div>
                                                    </div>
                                                </div>
                                                <h3 class="text-center mt-3">Data Guru</h3>
                                                <hr class="mx-5">
                                                <div class="row">
                                                    <div class="col">
                                                        <div id="barchart_dataGuru"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div id="piechart_dataGuru"></div>
                                                    </div>
                                                </div>
                                                <div class="row mx-5 mb-3">
                                                    <div class="col">
                                                        <div id="logaritma_dataGuru"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="sda" role="tabpanel"
                                                aria-labelledby="nav-contact-tab">
                                                <h3 class="text-center mt-3">Data Korban Bencana</h3>
                                                <hr class="mx-5">
                                                <div class="row">
                                                    <div class="col">
                                                        <div id="barchart_korbencana"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div id="piechart_korbencana"></div>
                                                    </div>
                                                </div>
                                                <div class="row mx-5 mb-3">
                                                    <div class="col">
                                                        <div id="logaritma_korbencana"></div>
                                                    </div>
                                                </div>
                                                <h3 class="text-center mt-3">Data Putus Sekolah</h3>
                                                <hr class="mx-5">
                                                <div class="row">
                                                    <div class="col">
                                                        <div id="barchart_ptsSekolah"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div id="piechart_ptsSekolah"></div>
                                                    </div>
                                                </div>
                                                <div class="row mx-5 mb-3">
                                                    <div class="col">
                                                        <div id="logaritma_ptsSekolah"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="ekonomi" role="tabpanel"
                                                aria-labelledby="nav-contact-tab">
                                                <h3 class="text-center mt-3">Data Angkatan Kerja</h3>
                                                <hr class="mx-5">
                                                <div class="row">
                                                    <div class="col">
                                                        <div id="barchart_aktkerja"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div id="piechart_aktkerja"></div>
                                                    </div>
                                                </div>
                                                <div class="row mx-5 mb-3">
                                                    <div class="col">
                                                        <div id="logaritma_aktkerja"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="politik" role="tabpanel"
                                                aria-labelledby="nav-contact-tab">Bidang Politik</div>
                                            <div class="tab-pane fade" id="hukum" role="tabpanel"
                                                aria-labelledby="nav-contact-tab">Bidang Hukum</div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="kekerasan" role="tabpanel"
                                        aria-labelledby="contact-tab">
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                                    data-bs-target="#kekerasanTerhadap" type="button" role="tab"
                                                    aria-controls="nav-home" aria-selected="true">Kekerasan
                                                    Terhadap</button>
                                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                                    data-bs-target="#lokasiKekerasan" type="button" role="tab"
                                                    aria-controls="nav-profile" aria-selected="false">Lokasi
                                                    Kekerasan</button>
                                                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                                    data-bs-target="#statusKekerasan" type="button" role="tab"
                                                    aria-controls="nav-contact" aria-selected="false">Status
                                                    Kekerasan</button>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="kekerasanTerhadap" role="tabpanel"
                                                aria-labelledby="nav-home-tab">Kekerasan Terhadap</div>
                                            <div class="tab-pane fade" id="lokasiKekerasan" role="tabpanel"
                                                aria-labelledby="nav-profile-tab">Lokasi Kekerasan</div>
                                            <div class="tab-pane fade" id="statusKekerasan" role="tabpanel"
                                                aria-labelledby="nav-contact-tab">Status Kekerasan</div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="sdaLingkungan" role="tabpanel"
                                        aria-labelledby="contact-tab">
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                                    data-bs-target="#dbltGender" type="button" role="tab"
                                                    aria-controls="nav-home" aria-selected="true">Data Bencana Lingkungan
                                                    Terhadap Gender</button>
                                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                                    data-bs-target="#dbltAnak" type="button" role="tab"
                                                    aria-controls="nav-profile" aria-selected="false">Data Bencana
                                                    Lingkungan Terhadap Anak</button>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="dbltGender" role="tabpanel"
                                                aria-labelledby="nav-home-tab">Data Bencana Lingkungan Terhadap Gender
                                            </div>
                                            <div class="tab-pane fade" id="dbltAnak" role="tabpanel"
                                                aria-labelledby="nav-profile-tab">Data Bencana Lingkungan Terhadap Anak
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Team</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row">

                    <div class="col-lg-6">
                        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
                            <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Walter White</h4>
                                <span>Chief Executive Officer</span>
                                <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                                <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
                            <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Sarah Jhonson</h4>
                                <span>Product Manager</span>
                                <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                                <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
                            <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>William Anderson</h4>
                                <span>CTO</span>
                                <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                                <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
                            <div class="pic"><img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Amanda Jepson</h4>
                                <span>Accountant</span>
                                <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                                <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row">

                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>H45V+2V2, Ulantha,, Ulanta, Suwawa, Bone Bolango Regency, Gorontalo 96113</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>info@example.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+1 5589 55488 55s</p>
                            </div>

                            <iframe
                                src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=dinas sosial kabupaten bonebolango&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                                frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                        </div>

                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Your Name</label>
                                    <input type="text" name="name" class="form-control" id="name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Your Email</label>
                                    <input type="email" class="form-control" name="email" id="email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name">Subject</label>
                                <input type="text" class="form-control" name="subject" id="subject" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Message</label>
                                <textarea class="form-control" name="message" rows="10" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->
    </main><!-- End #main -->

    {{-- IPG --}}
    <script>
        // Barchart_Klasprespend
        Highcharts.chart('barchart_klasprespend', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Data Presentase Penduduk'
            },
            subtitle: {
                text: 'Source: Bps.id'
            },
            xAxis: {
                categories: {!! json_encode($desaKlasprespenduduk) !!},
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Jumlah (Orang)'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y} Orang</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Orang',
                data: {!! json_encode($jumKlasprespenduduk) !!}
            }]
        });

        // Piechart_Klasprespend
        Highcharts.chart('piechart_klasprespend', {
            chart: {
                type: 'pie'
            },
            title: {
                text: 'Klasifikasi Presentase Penduduk'
            },

            accessibility: {
                announceNewData: {
                    enabled: true
                },
                point: {
                    valueSuffix: '%'
                }
            },

            plotOptions: {
                series: {
                    dataLabels: {
                        enabled: true,
                        // format: '{point.name}: {point.y:.1f}%'
                    }
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:11px">{series.data.name}</span><br>',
                // pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
            },

            series: [{
                name: 'Jumlah',
                colorByPoint: true,
                data: [{
                        name: "Laki - laki",
                        y: {{ $piechartKlasprespend->co }},
                    },
                    {
                        name: "Perempuan",
                        y: {{ $piechartKlasprespend->ce }},
                    }
                ]
            }],
        });

        // Log_Klasprespend
        Highcharts.chart('logaritma_klasprespend', {

            title: {
                text: 'Kenaikan Presentase Penduduk'
            },

            yAxis: {
                title: {
                    text: 'Jumlah Penduduk'
                }
            },

            xAxis: {
                title: {
                    text: 'Tahun'
                },
                type: 'datetime',
                accessibility: {
                    rangeDescription: 'Range: 2022 to 2025'
                }
            },

            legend: {
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'top',
            },

            plotOptions: {
                series: {
                    label: {
                        connectorAllowed: false
                    },
                    pointStart: Date.UTC(2022, 0, 1),
                    pointInterval: 8760 * 3600 * 1000,
                }
            },

            series: [{
                name: 'Presentase Penduduk',
                data: {!! json_encode($logjumKlasprespend) !!}
            }],

            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }

        });
    </script>


    {{-- BIDANG KESEHATAN --}}
    <script>
        Highcharts.chart('container', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Data Kematian Ibu Hamil'
            },
            subtitle: {
                text: 'Source: Bps.id'
            },
            xAxis: {
                categories: {!! json_encode($desa) !!},
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Jumlah (Orang)'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y} Orang</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Orang',
                data: {!! json_encode($jum) !!}
            }]
        });

        Highcharts.chart('piechart', {
            chart: {
                type: 'pie'
            },
            title: {
                text: 'Penyebab Kematian Ibu Hamil'
            },

            accessibility: {
                announceNewData: {
                    enabled: true
                },
                point: {
                    valueSuffix: '%'
                }
            },

            plotOptions: {
                series: {
                    dataLabels: {
                        enabled: true,
                        // format: '{point.name}: {point.y:.1f}%'
                    }
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:11px">{series.data.name}</span><br>',
                // pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
            },

            series: [{
                name: 'Jumlah',
                colorByPoint: true,
                data: [{
                        name: "Partus Lama",
                        y: {{ $piechartKmtIbu->partusLama }},
                    },
                    {
                        name: "infeksi",
                        y: {{ $piechartKmtIbu->infeksi }},
                    },
                    {
                        name: "hirpetensi",
                        y: {{ $piechartKmtIbu->hirpetensi }},
                    },
                    {
                        name: "pendarahan",
                        y: {{ $piechartKmtIbu->pendarahan }},
                    },
                    {
                        name: "penyebab lain",
                        y: {{ $piechartKmtIbu->penyelain }},
                    }
                ]
            }],
        });

        Highcharts.chart('logaritmaAxis', {

            title: {
                text: 'Kenaikan Kematian Ibu Hamil'
            },

            yAxis: {
                title: {
                    text: 'Jumlah Kematian'
                }
            },

            xAxis: {
                title: {
                    text: 'Tahun'
                },
                type: 'datetime',
                accessibility: {
                    rangeDescription: 'Range: 2022 to 2025'
                }
            },

            legend: {
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'top',
            },

            plotOptions: {
                series: {
                    label: {
                        connectorAllowed: false
                    },
                    pointStart: Date.UTC(2022, 0, 1),
                    pointInterval: 8760 * 3600 * 1000,
                }
            },

            series: [{
                name: 'Kematian Ibu Hamil',
                data: {!! json_encode($jumKematian) !!}
            }],

            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }

        });

        // kmtBayi
        Highcharts.chart('barchart_kmtbayi', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Data Kematian Bayi'
            },
            subtitle: {
                text: 'Source: Bps.id'
            },
            xAxis: {
                categories: {!! json_encode($desaKmtbayi) !!},
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Jumlah (Orang)'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                // pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                //     '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                    name: 'Orang',
                    data: {!! json_encode($jumKmtbayi) !!}

                },

            ]
        });

        Highcharts.chart('piechart_kmtbayi', {
            chart: {
                type: 'pie'
            },
            title: {
                text: 'Penyebab Kematian Bayi'
            },
            subtitle: {
                text: 'Click the slices to view versions. Source: <a href="http://statcounter.com" target="_blank">statcounter.com</a>'
            },

            accessibility: {
                announceNewData: {
                    enabled: true
                },
                point: {
                    valueSuffix: '%'
                }
            },

            plotOptions: {
                series: {
                    dataLabels: {
                        enabled: true,
                        // format: '{point.name}: {point.y:.1f}%'
                    }
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                // pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
            },

            series: [{
                name: "Jumlah",
                colorByPoint: true,
                data: [{
                        name: "Laki - Laki",
                        y: {{ $piechartKmtBayi->co == null ? '0' : $piechartKmtBayi->co }},
                    },
                    {
                        name: "Perempuan",
                        y: {{ $piechartKmtBayi->ce == null ? '0' : $piechartKmtBayi->ce }},
                    }
                ]
            }]
        });

        Highcharts.chart('logaritma_kmtbayi', {

            title: {
                text: 'Kenaikan Kematian Bayi'
            },

            yAxis: {
                title: {
                    text: 'Jumlah Kematian'
                }
            },

            xAxis: {
                title: {
                    text: 'Tahun'
                },
                type: 'datetime',
                accessibility: {
                    rangeDescription: 'Range: 2022 to 2025'
                }
            },

            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle',
            },

            plotOptions: {
                series: {
                    label: {
                        connectorAllowed: false
                    },
                    pointStart: Date.UTC(2022, 0, 1),
                    pointInterval: 8760 * 3600 * 1000,
                }
            },

            series: [{
                name: 'Kematian Bayi',
                data: {!! json_encode($logjumKmtbayi) !!}
            }],

            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }

        });

        // hiv
        Highcharts.chart('barchart_hiv', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Data HIV'
            },
            subtitle: {
                text: 'Source: Bps.id'
            },
            xAxis: {
                categories: {!! json_encode($desaHiv) !!},
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Jumlah (Orang)'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                // pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                //     '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                    name: 'Orang',
                    data: {!! json_encode($jumHiv) !!}

                },

            ]
        });

        Highcharts.chart('piechart_hiv', {
            chart: {
                type: 'pie'
            },
            title: {
                text: 'Penyebab  HIV'
            },
            subtitle: {
                text: 'Click the slices to view versions. Source: <a href="http://statcounter.com" target="_blank">statcounter.com</a>'
            },

            accessibility: {
                announceNewData: {
                    enabled: true
                },
                point: {
                    valueSuffix: '%'
                }
            },

            plotOptions: {
                series: {
                    dataLabels: {
                        enabled: true,
                        // format: '{point.name}: {point.y:.1f}%'
                    }
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                // pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
            },

            series: [{
                name: "Jumlah",
                colorByPoint: true,
                data: [{
                        name: "Laki - Laki",
                        y: {{ $piechartHiv->co == null ? '0' : $piechartHiv->co }},
                    },
                    {
                        name: "Perempuan",
                        y: {{ $piechartHiv->co == null ? '0' : $piechartHiv->co }},
                    }
                ]
            }]
        });

        Highcharts.chart('logaritma_hiv', {

            title: {
                text: 'Kenaikan Hiv'
            },

            yAxis: {
                title: {
                    text: 'Jumlah Terpapar'
                }
            },

            xAxis: {
                title: {
                    text: 'Tahun'
                },
                type: 'datetime',
                accessibility: {
                    rangeDescription: 'Range: 2022 to 2025'
                }
            },

            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle',
            },

            plotOptions: {
                series: {
                    label: {
                        connectorAllowed: false
                    },
                    pointStart: Date.UTC(2022, 0, 1),
                    pointInterval: 8760 * 3600 * 1000,
                }
            },

            series: [{
                name: 'Terpapar Hiv',
                data: {!! json_encode($logjumHiv) !!}
            }],

            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }

        });
    </script>

    {{-- BIDANG PENDIDIKAN --}}
    <script>
        // Partisipasi Sekolah
        Highcharts.chart('barchart_partSekolah', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Data Partisipasi Sekolah'
            },
            subtitle: {
                text: 'Source: Bps.id'
            },
            xAxis: {
                categories: {!! json_encode($desaPartsekolah) !!},
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Persentase'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} %</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                    name: 'Persentase',
                    data: {!! json_encode($jumPartsekolah) !!}

                },

            ]
        });

        Highcharts.chart('piechart_partSekolah', {
            chart: {
                type: 'pie'
            },
            title: {
                text: 'Data Terpilah Partisipasi Sekolah'
            },
            subtitle: {
                text: 'Click the slices to view versions. Source: <a href="http://statcounter.com" target="_blank">statcounter.com</a>'
            },

            accessibility: {
                announceNewData: {
                    enabled: true
                },
                point: {
                    valueSuffix: '%'
                }
            },

            plotOptions: {
                series: {
                    dataLabels: {
                        enabled: true,
                        // format: '{point.name}: {point.y:.1f}%'
                    }
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
            },

            series: [{
                name: "Persentase",
                colorByPoint: true,
                data: [{
                        name: "Laki - Laki (7 Tahun)",
                        y: {{ $piechartPartsekolah->l7 == null ? '0' : $piechartPartsekolah->l7 }},
                    },
                    {
                        name: "Perempuan (7 Tahun)",
                        y: {{ $piechartPartsekolah->p7 == null ? '0' : $piechartPartsekolah->p7 }},
                    },
                    {
                        name: "Laki - Laki (13 Tahun)",
                        y: {{ $piechartPartsekolah->l13 == null ? '0' : $piechartPartsekolah->l13 }},
                    },
                    {
                        name: "Perempuan (13 Tahun)",
                        y: {{ $piechartPartsekolah->p13 == null ? '0' : $piechartPartsekolah->p13 }},
                    },
                    {
                        name: "Laki - Laki (16 Tahun)",
                        y: {{ $piechartPartsekolah->l16 == null ? '0' : $piechartPartsekolah->l16 }},
                    },
                    {
                        name: "Perempuan (16 Tahun)",
                        y: {{ $piechartPartsekolah->p16 == null ? '0' : $piechartPartsekolah->p16 }},
                    },
                    {
                        name: "Laki - Laki (19 Tahun)",
                        y: {{ $piechartPartsekolah->l19 == null ? '0' : $piechartPartsekolah->l19 }},
                    },
                    {
                        name: "Perempuan (19 Tahun)",
                        y: {{ $piechartPartsekolah->p19 == null ? '0' : $piechartPartsekolah->p19 }},
                    },
                ]
            }]
        });

        Highcharts.chart('logaritma_partSekolah', {

            title: {
                text: 'Kenaikan Partisipasi Sekolah'
            },

            yAxis: {
                title: {
                    text: 'Persentase Kenaikan'
                }
            },

            xAxis: {
                title: {
                    text: 'Tahun'
                },
                type: 'datetime',
                accessibility: {
                    rangeDescription: 'Range: 2022 to 2025'
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} %</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },

            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle',
            },

            plotOptions: {
                series: {
                    label: {
                        connectorAllowed: false
                    },
                    pointStart: Date.UTC(2022, 0, 1),
                    pointInterval: 8760 * 3600 * 1000,
                }
            },

            series: [{
                name: 'Persentase Partisipasi Sekolah',
                data: {!! json_encode($logjumPartsekolah) !!}
            }],

            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }

        });

        // Putus Sekolah
        Highcharts.chart('barchart_ptsSekolah', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Data Putus Sekolah'
            },
            subtitle: {
                text: 'Source: Bps.id'
            },
            xAxis: {
                categories: {!! json_encode($desaPtssekolah) !!},
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Persentase'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y} %</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                    name: 'Persentase',
                    data: {!! json_encode($jumPtssekolah) !!}

                },

            ]
        });

        Highcharts.chart('piechart_ptsSekolah', {
            chart: {
                type: 'pie'
            },
            title: {
                text: 'Data Terpilah Putus Sekolah'
            },
            subtitle: {
                text: 'Click the slices to view versions. Source: <a href="http://statcounter.com" target="_blank">statcounter.com</a>'
            },

            accessibility: {
                announceNewData: {
                    enabled: true
                },
                point: {
                    valueSuffix: '%'
                }
            },

            plotOptions: {
                series: {
                    dataLabels: {
                        enabled: true,
                        // format: '{point.name}: {point.y:.1f}%'
                    }
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
            },

            series: [{
                name: "Persentase",
                colorByPoint: true,
                data: [{
                        name: "Laki - Laki (SD)",
                        y: {{ $piechartPtssekolah->lsd == null ? '0' : $piechartPtssekolah->lsd }},
                    },
                    {
                        name: "Perempuan (SD)",
                        y: {{ $piechartPtssekolah->psd == null ? '0' : $piechartPtssekolah->psd }},
                    },
                    {
                        name: "Laki - Laki (SMP)",
                        y: {{ $piechartPtssekolah->lsmp == null ? '0' : $piechartPtssekolah->lsmp }},
                    },
                    {
                        name: "Perempuan (SMP)",
                        y: {{ $piechartPtssekolah->psmp == null ? '0' : $piechartPtssekolah->psmp }},
                    },
                    {
                        name: "Laki - Laki (SMA)",
                        y: {{ $piechartPtssekolah->lsma == null ? '0' : $piechartPtssekolah->lsma }},
                    },
                    {
                        name: "Perempuan (SMA)",
                        y: {{ $piechartPtssekolah->psma == null ? '0' : $piechartPtssekolah->psma }},
                    },
                ]
            }]
        });

        Highcharts.chart('logaritma_ptsSekolah', {

            title: {
                text: 'Kenaikan Putus Sekolah'
            },

            yAxis: {
                title: {
                    text: 'Persentase Kenaikan'
                }
            },

            xAxis: {
                title: {
                    text: 'Tahun'
                },
                type: 'datetime',
                accessibility: {
                    rangeDescription: 'Range: 2022 to 2025'
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y} %</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },

            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle',
            },

            plotOptions: {
                series: {
                    label: {
                        connectorAllowed: false
                    },
                    pointStart: Date.UTC(2022, 0, 1),
                    pointInterval: 8760 * 3600 * 1000,
                }
            },

            series: [{
                name: 'Persentase Putus Sekolah',
                data: {!! json_encode($logjumPtssekolah) !!}
            }],

            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }

        });

        // Data terpilah Bidang  SDA
        // Korban Bencana
        Highcharts.chart('barchart_korbencana', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Data Korban Bencana'
            },
            subtitle: {
                text: 'Source: Bps.id'
            },
            xAxis: {
                categories: {!! json_encode($jenis_bencana) !!},
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Persentase'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y} Orang</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                    name: 'Orang',
                    data: {!! json_encode($jum_bencana) !!}

                },

            ]
        });

        Highcharts.chart('piechart_korbencana', {
            chart: {
                type: 'pie'
            },
            title: {
                text: 'Data Korban Bencana'
            },
            subtitle: {
                text: 'Click the slices to view versions. Source: <a href="http://statcounter.com" target="_blank">statcounter.com</a>'
            },

            accessibility: {
                announceNewData: {
                    enabled: true
                },
                point: {
                    valueSuffix: '%'
                }
            },

            plotOptions: {
                series: {
                    dataLabels: {
                        enabled: true,
                        // format: '{point.name}: {point.y:.1f}%'
                    }
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y} Orang</b> of total<br/>'
            },

            series: [{
                name: "Korban",
                colorByPoint: true,
                data: [{
                        name: "Dewasa(Laki -Laki)",
                        y: {{ $piechartkorbencana->ldes == null ? '0' : $piechartkorbencana->ldes }},
                    },
                    {
                        name: "Dewasa(Perempuan)",
                        y: {{ $piechartkorbencana->pdes == null ? '0' : $piechartkorbencana->pdes }},
                    },
                    {
                        name: "Anak - Anak(Laki - Laki)",
                        y: {{ $piechartkorbencana->lan == null ? '0' : $piechartkorbencana->lan }},
                    },
                    {
                        name: "Anak - Anak(Perempuan)",
                        y: {{ $piechartkorbencana->pan == null ? '0' : $piechartkorbencana->pan }},
                    },
                ]
            }]
        });

        Highcharts.chart('logaritma_korbencana', {

            title: {
                text: 'Kenaikan Korban Bencana'
            },

            yAxis: {
                title: {
                    text: 'Total Kenaikan'
                }
            },

            xAxis: {
                title: {
                    text: 'Tahun'
                },
                type: 'datetime',
                accessibility: {
                    rangeDescription: 'Range: 2022 to 2025'
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y} %</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },

            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle',
            },

            plotOptions: {
                series: {
                    label: {
                        connectorAllowed: false
                    },
                    pointStart: Date.UTC(2022, 0, 1),
                    pointInterval: 8760 * 3600 * 1000,
                }
            },

            series: [{
                name: 'Total Korban Bencana',
                data: {!! json_encode($logjumKorbencana) !!}
            }],

            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }

        });

        // Data terpilah Bidang  Ekonomi
        // aktkerja
        Highcharts.chart('barchart_aktkerja', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Data Angkatan Kerja'
            },
            subtitle: {
                text: 'Source: Bps.id'
            },
            xAxis: {
                categories: {!! json_encode($desa_aktkerja) !!},
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Total'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y} Orang</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                    name: 'Orang',
                    data: {!! json_encode($jum_aktkerja) !!}

                },

            ]
        });

        Highcharts.chart('piechart_aktkerja', {
            chart: {
                type: 'pie'
            },
            title: {
                text: 'Data Angkatan Kerja'
            },
            subtitle: {
                text: 'Click the slices to view versions. Source: <a href="http://statcounter.com" target="_blank">statcounter.com</a>'
            },

            accessibility: {
                announceNewData: {
                    enabled: true
                },
                point: {
                    valueSuffix: '%'
                }
            },

            plotOptions: {
                series: {
                    dataLabels: {
                        enabled: true,
                        // format: '{point.name}: {point.y:.1f}%'
                    }
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y} Orang</b> of total<br/>'
            },

            series: [{
                name: "Korban",
                colorByPoint: true,
                data: [{
                        name: "SD(Laki -Laki)",
                        y: {{ $piechart_aktkerja->lsd == null ? '0' : $piechart_aktkerja->psd }},
                    },
                    {
                        name: "SD(Perempuan)",
                        y: {{ $piechart_aktkerja->psd == null ? '0' : $piechart_aktkerja->psd }},
                    },
                    {
                        name: "SMP(Laki - Laki)",
                        y: {{ $piechart_aktkerja->lsmp == null ? '0' : $piechart_aktkerja->lsmp }},
                    },
                    {
                        name: "SMP(Perempuan)",
                        y: {{ $piechart_aktkerja->psmp == null ? '0' : $piechart_aktkerja->psmp }},
                    },
                    {
                        name: "SMA(Laki - Laki)",
                        y: {{ $piechart_aktkerja->lsma == null ? '0' : $piechart_aktkerja->lsma }},
                    },
                    {
                        name: "SMA(Perempuan)",
                        y: {{ $piechart_aktkerja->psma == null ? '0' : $piechart_aktkerja->psma }},
                    },
                    {
                        name: "Perguruan Tinggi(Laki - Laki)",
                        y: {{ $piechart_aktkerja->lpt == null ? '0' : $piechart_aktkerja->lpt }},
                    },
                    {
                        name: "Perguruan Tinggi(Perempuan)",
                        y: {{ $piechart_aktkerja->ppt == null ? '0' : $piechart_aktkerja->ppt }},
                    },
                ]
            }]
        });

        Highcharts.chart('logaritma_aktkerja', {

            title: {
                text: 'Kenaikan Ankatan Kerja'
            },

            yAxis: {
                title: {
                    text: 'Total Kenaikan'
                }
            },

            xAxis: {
                title: {
                    text: 'Tahun'
                },
                type: 'datetime',
                accessibility: {
                    rangeDescription: 'Range: 2022 to 2025'
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y} %</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },

            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle',
            },

            plotOptions: {
                series: {
                    label: {
                        connectorAllowed: false
                    },
                    pointStart: Date.UTC(2022, 0, 1),
                    pointInterval: 8760 * 3600 * 1000,
                }
            },

            series: [{
                name: 'Total Korban Bencana',
                data: {!! json_encode($logjumAktkerja) !!}
            }],

            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }

        });
    </script>
@endsection
