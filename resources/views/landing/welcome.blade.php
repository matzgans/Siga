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
                        <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
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
                                                Presentase Penduduk
                                            </div>
                                            <div class="tab-pane fade" id="jenisKelamin" role="tabpanel"
                                                aria-labelledby="nav-profile-tab">...</div>
                                            <div class="tab-pane fade" id="kelompokUmur" role="tabpanel"
                                                aria-labelledby="nav-contact-tab">...</div>
                                            <div class="tab-pane fade" id="pendidikanTerakhir" role="tabpanel"
                                                aria-labelledby="nav-contact-tab">...</div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="dataTerpilah" role="tabpanel"
                                        aria-labelledby="profile-tab">
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                                    data-bs-target="#bidangKesehatan" type="button" role="tab"
                                                    aria-controls="nav-home" aria-selected="true">Bidang
                                                    Kesehatan</button>
                                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                                    data-bs-target="#bidangPendidikan" type="button" role="tab"
                                                    aria-controls="nav-profile" aria-selected="false">Bidang
                                                    Pendidikan</button>
                                                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                                    data-bs-target="#bidangSDALingkungan" type="button" role="tab"
                                                    aria-controls="nav-contact" aria-selected="false">Bidang SDA
                                                    Lingkungan</button>
                                                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                                    data-bs-target="#bidangEkonomi" type="button" role="tab"
                                                    aria-controls="nav-contact" aria-selected="false">Bidang
                                                    Ekonomi</button>
                                                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                                    data-bs-target="#bidangPolitik" type="button" role="tab"
                                                    aria-controls="nav-contact" aria-selected="false">Bidang
                                                    Politik</button>
                                                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                                    data-bs-target="#bidangHukum" type="button" role="tab"
                                                    aria-controls="nav-contact" aria-selected="false">Bidang
                                                    Hukum</button>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="bidangKesehatan" role="tabpanel"
                                                aria-labelledby="nav-home-tab">
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
                                            </div>
                                            <div class="tab-pane fade" id="bidangPendidikan" role="tabpanel"
                                                aria-labelledby="nav-profile-tab">Bidang Pendidikan</div>
                                            <div class="tab-pane fade" id="bidangSDALingkungan" role="tabpanel"
                                                aria-labelledby="nav-contact-tab">Bidang SDA Lingkungan</div>
                                            <div class="tab-pane fade" id="bidangEkonomi" role="tabpanel"
                                                aria-labelledby="nav-contact-tab">Bidang Ekonomi</div>
                                            <div class="tab-pane fade" id="bidangPolitik" role="tabpanel"
                                                aria-labelledby="nav-contact-tab">Bidang Politik</div>
                                            <div class="tab-pane fade" id="bidangHukum" role="tabpanel"
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
                                <p>A108 Adam Street, New York, NY 535022</p>
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
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
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
                    data: {!! json_encode($jum) !!}

                },

            ]
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
                        y: {{ $partus_lama }},
                    },
                    {
                        name: "infeksi",
                        y: {{ $infeksi }},
                    },
                    {
                        name: "hirpetensi",
                        y: {{ $hirpetensi }},
                    },
                    {
                        name: "pendarahan",
                        y: {{ $pendarahan }},
                    },
                    {
                        name: "penyebab lain",
                        y: {{ $penyelain }},
                    }
                ]
            }],
            // drilldown: {
            //     series: [
            //         {
            //             name: "Chrome",
            //             id: "Chrome",
            //             data: [
            //                 [
            //                     "v97.0",
            //                     36.89
            //                 ],
            //                 [
            //                     "v96.0",
            //                     18.16
            //                 ],
            //                 [
            //                     "v95.0",
            //                     0.54
            //                 ],
            //                 [
            //                     "v94.0",
            //                     0.7
            //                 ],
            //                 [
            //                     "v93.0",
            //                     0.8
            //                 ],
            //                 [
            //                     "v92.0",
            //                     0.41
            //                 ],
            //                 [
            //                     "v91.0",
            //                     0.31
            //                 ],
            //                 [
            //                     "v90.0",
            //                     0.13
            //                 ],
            //                 [
            //                     "v89.0",
            //                     0.14
            //                 ],
            //                 [
            //                     "v88.0",
            //                     0.1
            //                 ],
            //                 [
            //                     "v87.0",
            //                     0.35
            //                 ],
            //                 [
            //                     "v86.0",
            //                     0.17
            //                 ],
            //                 [
            //                     "v85.0",
            //                     0.18
            //                 ],
            //                 [
            //                     "v84.0",
            //                     0.17
            //                 ],
            //                 [
            //                     "v83.0",
            //                     0.21
            //                 ],
            //                 [
            //                     "v81.0",
            //                     0.1
            //                 ],
            //                 [
            //                     "v80.0",
            //                     0.16
            //                 ],
            //                 [
            //                     "v79.0",
            //                     0.43
            //                 ],
            //                 [
            //                     "v78.0",
            //                     0.11
            //                 ],
            //                 [
            //                     "v76.0",
            //                     0.16
            //                 ],
            //                 [
            //                     "v75.0",
            //                     0.15
            //                 ],
            //                 [
            //                     "v72.0",
            //                     0.14
            //                 ],
            //                 [
            //                     "v70.0",
            //                     0.11
            //                 ],
            //                 [
            //                     "v69.0",
            //                     0.13
            //                 ],
            //                 [
            //                     "v56.0",
            //                     0.12
            //                 ],
            //                 [
            //                     "v49.0",
            //                     0.17
            //                 ]
            //             ]
            //         },
            //         {
            //             name: "Safari",
            //             id: "Safari",
            //             data: [
            //                 [
            //                     "v15.3",
            //                     0.1
            //                 ],
            //                 [
            //                     "v15.2",
            //                     2.01
            //                 ],
            //                 [
            //                     "v15.1",
            //                     2.29
            //                 ],
            //                 [
            //                     "v15.0",
            //                     0.49
            //                 ],
            //                 [
            //                     "v14.1",
            //                     2.48
            //                 ],
            //                 [
            //                     "v14.0",
            //                     0.64
            //                 ],
            //                 [
            //                     "v13.1",
            //                     1.17
            //                 ],
            //                 [
            //                     "v13.0",
            //                     0.13
            //                 ],
            //                 [
            //                     "v12.1",
            //                     0.16
            //                 ]
            //             ]
            //         },
            //         {
            //             name: "Edge",
            //             id: "Edge",
            //             data: [
            //                 [
            //                     "v97",
            //                     6.62
            //                 ],
            //                 [
            //                     "v96",
            //                     2.55
            //                 ],
            //                 [
            //                     "v95",
            //                     0.15
            //                 ]
            //             ]
            //         },
            //         {
            //             name: "Firefox",
            //             id: "Firefox",
            //             data: [
            //                 [
            //                     "v96.0",
            //                     4.17
            //                 ],
            //                 [
            //                     "v95.0",
            //                     3.33
            //                 ],
            //                 [
            //                     "v94.0",
            //                     0.11
            //                 ],
            //                 [
            //                     "v91.0",
            //                     0.23
            //                 ],
            //                 [
            //                     "v78.0",
            //                     0.16
            //                 ],
            //                 [
            //                     "v52.0",
            //                     0.15
            //                 ]
            //             ]
            //         }
            //     ]
            // }
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
                    rangeDescription: 'Range: 2022 to 2024'
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

        // JenisKelamin
        Highcharts.chart('barJenkel', {
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
                    data: {!! json_encode($jum) !!}

                },

            ]
        });

        Highcharts.chart('piechartJenkel', {
            chart: {
                type: 'pie'
            },
            title: {
                text: 'Penyebab Kematian Ibu Hamil'
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
                        name: "Partus Lama",
                        y: {{ $partus_lama }},
                    },
                    {
                        name: "infeksi",
                        y: {{ $infeksi }},
                    },
                    {
                        name: "hirpetensi",
                        y: {{ $hirpetensi }},
                    },
                    {
                        name: "pendarahan",
                        y: {{ $pendarahan }},
                    },
                    {
                        name: "penyebab lain",
                        y: {{ $penyelain }},
                    }
                ]
            }],
            // drilldown: {
            //     series: [
            //         {
            //             name: "Chrome",
            //             id: "Chrome",
            //             data: [
            //                 [
            //                     "v97.0",
            //                     36.89
            //                 ],
            //                 [
            //                     "v96.0",
            //                     18.16
            //                 ],
            //                 [
            //                     "v95.0",
            //                     0.54
            //                 ],
            //                 [
            //                     "v94.0",
            //                     0.7
            //                 ],
            //                 [
            //                     "v93.0",
            //                     0.8
            //                 ],
            //                 [
            //                     "v92.0",
            //                     0.41
            //                 ],
            //                 [
            //                     "v91.0",
            //                     0.31
            //                 ],
            //                 [
            //                     "v90.0",
            //                     0.13
            //                 ],
            //                 [
            //                     "v89.0",
            //                     0.14
            //                 ],
            //                 [
            //                     "v88.0",
            //                     0.1
            //                 ],
            //                 [
            //                     "v87.0",
            //                     0.35
            //                 ],
            //                 [
            //                     "v86.0",
            //                     0.17
            //                 ],
            //                 [
            //                     "v85.0",
            //                     0.18
            //                 ],
            //                 [
            //                     "v84.0",
            //                     0.17
            //                 ],
            //                 [
            //                     "v83.0",
            //                     0.21
            //                 ],
            //                 [
            //                     "v81.0",
            //                     0.1
            //                 ],
            //                 [
            //                     "v80.0",
            //                     0.16
            //                 ],
            //                 [
            //                     "v79.0",
            //                     0.43
            //                 ],
            //                 [
            //                     "v78.0",
            //                     0.11
            //                 ],
            //                 [
            //                     "v76.0",
            //                     0.16
            //                 ],
            //                 [
            //                     "v75.0",
            //                     0.15
            //                 ],
            //                 [
            //                     "v72.0",
            //                     0.14
            //                 ],
            //                 [
            //                     "v70.0",
            //                     0.11
            //                 ],
            //                 [
            //                     "v69.0",
            //                     0.13
            //                 ],
            //                 [
            //                     "v56.0",
            //                     0.12
            //                 ],
            //                 [
            //                     "v49.0",
            //                     0.17
            //                 ]
            //             ]
            //         },
            //         {
            //             name: "Safari",
            //             id: "Safari",
            //             data: [
            //                 [
            //                     "v15.3",
            //                     0.1
            //                 ],
            //                 [
            //                     "v15.2",
            //                     2.01
            //                 ],
            //                 [
            //                     "v15.1",
            //                     2.29
            //                 ],
            //                 [
            //                     "v15.0",
            //                     0.49
            //                 ],
            //                 [
            //                     "v14.1",
            //                     2.48
            //                 ],
            //                 [
            //                     "v14.0",
            //                     0.64
            //                 ],
            //                 [
            //                     "v13.1",
            //                     1.17
            //                 ],
            //                 [
            //                     "v13.0",
            //                     0.13
            //                 ],
            //                 [
            //                     "v12.1",
            //                     0.16
            //                 ]
            //             ]
            //         },
            //         {
            //             name: "Edge",
            //             id: "Edge",
            //             data: [
            //                 [
            //                     "v97",
            //                     6.62
            //                 ],
            //                 [
            //                     "v96",
            //                     2.55
            //                 ],
            //                 [
            //                     "v95",
            //                     0.15
            //                 ]
            //             ]
            //         },
            //         {
            //             name: "Firefox",
            //             id: "Firefox",
            //             data: [
            //                 [
            //                     "v96.0",
            //                     4.17
            //                 ],
            //                 [
            //                     "v95.0",
            //                     3.33
            //                 ],
            //                 [
            //                     "v94.0",
            //                     0.11
            //                 ],
            //                 [
            //                     "v91.0",
            //                     0.23
            //                 ],
            //                 [
            //                     "v78.0",
            //                     0.16
            //                 ],
            //                 [
            //                     "v52.0",
            //                     0.15
            //                 ]
            //             ]
            //         }
            //     ]
            // }
        });

        Highcharts.chart('logaritmaAxisJenkel', {

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
                    rangeDescription: 'Range: 2022 to 2024'
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
    </script>
@endsection
