<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Arsha Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets') }}/img/favicon.png" rel="icon">
    <link href="{{ asset('assets') }}/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets') }}/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets') }}/css/style.css" rel="stylesheet">

    {{-- DataTable CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

    <!-- =======================================================
  * Template Name: Arsha - v4.9.1
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="/">Arsha</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li class="dropdown"><a href="#"><span>IPGA</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Persentase penduduk</a></li>
                            <li><a href="{{route('ipg')}}">Jenis Kelamin</a></li>
                            <li><a href="#">Kelompok Umur</a></li>
                            <li><a href="#">Pendidikan Terakhir</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Data Terpilah</span><i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li class="dropdown w-75"><a href="#"><span>Bidang Kesehatan</span> <i class="bi bi-chevron-down"></i></a>
                                <ul>
                                    <li><a href="#">Angka Harapan Hidup</a></li>
                                    <li><a href="{{route('dataterpilah')}}">Angka Kematian Ibu Hamil</a></li>
                                    <li><a href="#">Kelompok Umur</a></li>
                                    <li><a href="#">Pendidikan Terakhir</a></li>
                                </ul>
                            </li>
                            <li class="dropdown w-75"><a href="#"><span>Bidang Pendidikan</span> <i
                                        class="bi bi-chevron-down"></i></a>
                                <ul>
                                    <li><a href="#">Data Putus Sekolah</a></li>
                                    <li><a href="#">Jumlah Guru</a></li>
                                    <li><a href="#">Sekolah</a></li>
                                    <li><a href="#">Angka Partisipasi</a></li>
                                </ul>
                            </li>
                            <li class="dropdown w-75"><a href="#"><span>Bidang Ekonomi</span> <i class="bi bi-chevron-down"></i></a>
                                <ul>
                                    <li><a href="#">Data Angka Kerja</a></li>
                                    <li><a href="#">Data Penduduk Miskin</a></li>
                                    <li class="dropdown"><a href="#"><span>Pekerja Di Sektor</span> <i
                                                class="bi bi-chevron-down"></i></a>
                                        <ul>
                                            <li><a href="#">Formal</a></li>
                                            <li><a href="#">Informal</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown w-75"><a href="#"><span>Bidang Politik</span> <i class="bi bi-chevron-down"></i></a>
                                <ul>
                                    <li><a href="#">Data Camat</a></li>
                                    <li><a href="#">Data Kepala Desa</a></li>
                                    <li><a href="#">Data PNS</a></li>
                                    <li><a href="#">Data DPRD</a></li>
                                </ul>
                            </li>
                            <li class="dropdown w-75"><a href="#"><span>Bidang Hukum/Sosial Budaya</span> <i
                                        class="bi bi-chevron-down"></i></a>
                                <ul>
                                    <li><a href="#">Data Penghuni Lapas</a></li>
                                    <li><a href="#">Data Disabilitas</a></li>
                                    <li><a href="#">Data Perceraian</a></li>
                                    <li><a href="#">Data Pengadilan Negeri</a></li>
                                    <li><a href="#">Data Pengadilan Agama</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Kekerasan</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li class="dropdown"><a href="#">Kekerasan Terhadap <i class="bi bi-chevron-down"></i></a>
                                <ul>
                                    <li><a href="#">Perempuan</a></li>
                                    <li><a href="#">Anak</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Data Lokasi Kekerasan</a></li>
                            <li><a href="#">Data Status Kekerasan</a></li>
                        </ul>
                    </li>
                    <li class="dropdown w-50"><a href="#"><span>SDA Lingkukan</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Data Bencana Lingkungan Terhadap Gender</a></li>
                            <li><a href="#">Data Bencana Lingkungan Terhadap Anak</a></li>
                        </ul>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
    @yield('content')
    <!-- ======= Hero Section ======= -->
    

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h4>Join Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Arsha</h3>
                        <p>
                            A108 Adam Street <br>
                            New York, NY 535022<br>
                            United States <br><br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Social Networks</h4>
                        <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>Arsha</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    {{-- <div id="preloader"></div> --}}
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets') }}/vendor/aos/aos.js"></script>
    <script src="{{ asset('assets') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="{{ asset('assets') }}/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets') }}/js/main.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.dataTable').DataTable({
                responsive : true
            });
        });
    </script>

</body>

</html>