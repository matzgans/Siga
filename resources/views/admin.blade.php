<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SIGA</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assetsAdmin') }}/img/favicon.png" rel="icon">
    <link href="{{ asset('assetsAdmin') }}/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assetsAdmin') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assetsAdmin') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('assetsAdmin') }}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('assetsAdmin') }}/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="{{ asset('assetsAdmin') }}/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="{{ asset('assetsAdmin') }}/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ asset('assetsAdmin') }}/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assetsAdmin') }}/css/style.css" rel="stylesheet">

    {{-- DataTable CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">



    <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    @include('sweetalert::alert')
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="{{route('dashboard')}}" class="d-flex align-items-center">
                <img src="{{ asset('foto_landing') }}/SIgafix.png" alt="" style="width: 90px;">
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->

                <li class="nav-item dropdown">

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-bell"></i>
                        <span class="badge bg-primary badge-number">4</span>
                    </a><!-- End Notification Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                        <li class="dropdown-header">
                            You have 4 new notifications
                            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-exclamation-circle text-warning"></i>
                            <div>
                                <h4>Lorem Ipsum</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>30 min. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-x-circle text-danger"></i>
                            <div>
                                <h4>Atque rerum nesciunt</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>1 hr. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-check-circle text-success"></i>
                            <div>
                                <h4>Sit rerum fuga</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>2 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-info-circle text-primary"></i>
                            <div>
                                <h4>Dicta reprehenderit</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>4 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="dropdown-footer">
                            <a href="#">Show all notifications</a>
                        </li>

                    </ul><!-- End Notification Dropdown Items -->

                </li><!-- End Notification Nav -->

                <li class="nav-item dropdown">

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-chat-left-text"></i>
                        <span class="badge bg-success badge-number">3</span>
                    </a><!-- End Messages Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                        <li class="dropdown-header">
                            You have 3 new messages
                            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="{{ asset('assetsAdmin') }}/img/messages-1.jpg" alt=""
                                    class="rounded-circle">
                                <div>
                                    <h4>Maria Hudson</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>4 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="{{ asset('assetsAdmin') }}/img/messages-2.jpg" alt=""
                                    class="rounded-circle">
                                <div>
                                    <h4>Anna Nelson</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>6 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="{{ asset('assetsAdmin') }}/img/messages-3.jpg" alt=""
                                    class="rounded-circle">
                                <div>
                                    <h4>David Muldon</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>8 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="dropdown-footer">
                            <a href="#">Show all messages</a>
                        </li>

                    </ul><!-- End Messages Dropdown Items -->

                </li><!-- End Messages Nav -->

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                        data-bs-toggle="dropdown">
                        <img src="{{ asset('assetsAdmin') }}/img/profile-img.jpg" alt="Profile"
                            class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">{{ auth()->user()->name }}</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>{{ auth()->user()->name }}</h6>
                            <span>{{ auth()->user()->role }}</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                <i class="bi bi-question-circle"></i>
                                <span>Need Help?</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ route('auth.logout') }}">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link {{ $active != 'home' ? 'collapsed' : 'active' }} "
                    href="{{ route('dashboard') }}">
                    <i class="ri ri-dashboard-line"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            @if (auth()->user()->role == 'admin')
            <li class="nav-heading">Settings</li>
            <li class="nav-item">
                <a class="nav-link {{ $active != 'pengaturan' ? 'collapsed' : 'active' }}"
                    href="{{ route('pengaturan.index') }}">
                    <i class="fa-solid fa-user-tie"></i><span>Pengaturan Website</span>
                </a>
            </li>
            <li class="nav-heading">Data Master</li>

                <li class="nav-item">
                    <a class="nav-link {{ $active != 'pegawai' ? 'collapsed' : 'active' }}"
                        href="{{ route('pegawai.index') }}">
                        <i class="fa-solid fa-user-tie"></i><span>Pegawai</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active != 'desa' ? 'collapsed' : 'active' }}"
                        href="{{ route('desa.index') }}">
                        <i class="fa-solid fa-house"></i><span>Desa</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ $active != 'opd' ? 'collapsed' : 'active' }}"
                        href="{{ route('opd.index') }}">
                        <i class="fa-solid fa-building"></i><span>OPD</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ $active != 'pekerjaan' ? 'collapsed' : 'active' }}"
                        href="{{ route('pekerjaan.index') }}">
                        <i class="fa-solid fa-briefcase"></i><span>Pekerjaan</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ $active != 'bencana' ? 'collapsed' : 'active' }}"
                        href="{{ route('bencana.index') }}">
                        <i class="fa-solid fa-house-crack"></i><span>Bencana</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ $active != 'tahanan' ? 'collapsed' : 'active' }}"
                        href="{{ route('tahanan.index') }}">
                        <i class="fa-solid fa-handcuffs"></i><span>Tahanan</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ $active != 'tahun' ? 'collapsed' : 'active' }}"
                        href="{{ route('tahun.index') }}">
                        <i class="bi bi-calendar"></i><span>Tahun</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ $active != 'agama' ? 'collapsed' : 'active' }}"
                        href="{{ route('agama.index') }}">
                        <i class="fa-solid fa-person-praying"></i><span>Agama</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ $active != 'klasifikasi_umur' ? 'collapsed' : 'active' }}"
                        href="{{ route('klasifikasiumur.index') }}">
                        <i class="fa-solid fa-people-group"></i><span>Klasifikasi Umur</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ $active != 'jabatan' ? 'collapsed' : 'active' }}"
                        href="{{ route('jabatan.index') }}">
                        <i class="fa-solid fa-sitemap"></i><span>Jabatan</span>
                    </a>
                </li>
            @elseif(auth()->user()->role == 'pegawai')
                <li class="nav-item"> <a class="nav-link {{ ($active == 'klasprespend' || $active == 'prespenduduk' || $active == 'prespendidikan') ? 'active' : 'collapsed' }}"
                        data-bs-target="#ipg-nav" data-bs-toggle="collapse" href="#"> <i
                            class="fa-solid fa-chart-line"></i></i><span>IPG</span><i
                            class="bi bi-chevron-down ms-auto"></i> </a>
                    <ul id="ipg-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li> <a href="{{ route('klasprespend.index') }}"> <i
                                    class="bi bi-circle"></i><span>Klasifikasi
                                    Persentase Penduduk</span> </a>
                        </li>
                        <li> <a href="{{ route('prespenduduk.index') }}"> <i class="bi bi-circle"></i><span>Jumlah
                                    Penduduk
                                    Menurut Jenis Kelamin</span>
                            </a></li>
                        <li> <a href="{{ route('prespendidikan.index') }}"> <i
                                    class="bi bi-circle"></i><span>Persentase Pendidikan
                                    Terakhir</span> </a>
                        </li>
                    </ul>
                </li>
                {{-- <span>IPG</span>
                <li class="nav-item">
                    <a class="nav-link {{ $active != 'klasprespend' ? 'collapsed' : 'active' }}"
                        href="{{ route('klasprespend.index') }}">
                        <i class="ri ri-user-4-line"></i><span>Klasifikasi Presentasi Penduduk</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active != 'prespenduduk' ? 'collapsed' : 'active' }}"
                        href="{{ route('prespenduduk.index') }}">
                        <i class="ri ri-user-4-line"></i><span>Jumlah Penduduk Menurut JK</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active != 'prespendidikanterakhir' ? 'collapsed' : 'active' }}"
                        href="{{ route('prespendidikan.index') }}">
                        <i class="ri ri-user-4-line"></i><span>Presentase Pendidikan Terakhir</span>
                    </a>
                </li> --}}

                <li class="nav-item"> <a class="nav-link {{ ($active == 'ipha') ? 'active' : 'collapsed' }}"
                        data-bs-target="#ipha-nav" data-bs-toggle="collapse" href="#"> <i
                            class="fa-solid fa-hands-holding-child"></i><span>IPHA</span><i
                            class="bi bi-chevron-down ms-auto"></i> </a>
                    <ul id="ipha-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li> <a href="{{ route('ipha.index') }}"> <i class="bi bi-circle"></i><span>Pemenuhan Hak
                                    Anak</span> </a>
                        </li>
                    </ul>
                </li>
                {{-- <span>IPHA</span>
                <li class="nav-item">
                    <a class="nav-link {{ $active != 'ipha' ? 'collapsed' : 'active' }}"
                        href="{{ route('ipha.index') }}">
                        <i class="ri ri-user-4-line"></i><span>Index Pemenuhan Hak Anak</span>
                    </a>
                </li> --}}
                <li class="nav-heading">Data Terpilah</li>

                <li class="nav-item"> <a class="nav-link {{ ($active == 'pkematian' || $active == 'hiv' || $active == 'kmtbayi') ? 'active' : 'collapsed' }}"
                        data-bs-target="#kesehatan-nav" data-bs-toggle="collapse" href="#"> <i
                            class="fa-solid fa-staff-snake"></i><span>Bidang Kesehatan</span><i
                            class="bi bi-chevron-down ms-auto"></i> </a>
                    <ul id="kesehatan-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li> <a href="{{ route('pkematian.index') }}"> <i class="bi bi-circle"></i><span>Penyebab
                                    Kematian Ibu Hamil</span> </a>
                        </li>
                        <li> <a href="{{ route('hiv.index') }}"> <i class="bi bi-circle"></i><span>Penderita
                                    HIV/AIDS</span> </a>
                        </li>
                        <li> <a href="{{ route('kmtbayi.index') }}"> <i class="bi bi-circle"></i><span>Kematian
                                    Bayi</span> </a>
                        </li>
                    </ul>
                </li>
                {{-- <span>Data Terpilah Bidang Kesehatan</span>
                <li class="nav-item">
                    <a class="nav-link {{ $active != 'pkematian' ? 'collapsed' : 'active' }}"
                        href="{{ route('pkematian.index') }}">
                        <i class="ri ri-user-4-line"></i><span>Penyebab Kematian ibu Hamil</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active != 'hiv' ? 'collapsed' : 'active' }}"
                        href="{{ route('hiv.index') }}">
                        <i class="ri ri-user-4-line"></i><span>Penderita Hiv / Aids</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active != 'kmtbayi' ? 'collapsed' : 'active' }}"
                        href="{{ route('kmtbayi.index') }}">
                        <i class="ri ri-user-4-line"></i><span>Data Kematian Bayi</span>
                    </a>
                </li> --}}

                <li class="nav-item"> <a class="nav-link {{ ($active == 'partsekolah' || $active == 'ptssekolah' || $active == 'jumguru') ? 'active' : 'collapsed' }}"
                        data-bs-target="#pendidikan-nav" data-bs-toggle="collapse" href="#"> <i
                            class="fa-solid fa-graduation-cap"></i><span>Bidang Pendidikan</span><i
                            class="bi bi-chevron-down ms-auto"></i> </a>
                    <ul id="pendidikan-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li> <a href="{{ route('partsekolah.index') }}"> <i class="bi bi-circle"></i><span>Data
                                    Partisipasi Sekolah</span> </a>
                        </li>
                        <li> <a href="{{ route('ptssekolah.index') }}"> <i class="bi bi-circle"></i><span>Data Putus
                                    Sekolah</span> </a>
                        </li>
                        <li> <a href="{{ route('jumguru.index') }}"> <i class="bi bi-circle"></i><span>Data Jumlah
                                    Guru</span> </a>
                        </li>
                    </ul>
                </li>
                {{-- <span>Data Terpilah Bidang Pendidikan</span>
                <li class="nav-item">
                    <a class="nav-link {{ $active != 'partisipasisekolah' ? 'collapsed' : 'active' }}"
                        href="{{ route('partsekolah.index') }}">
                        <i class="ri ri-user-4-line"></i><span>Data Partisipasi Sekolah</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ $active != 'putussekolah' ? 'collapsed' : 'active' }}"
                        href="{{ route('ptssekolah.index') }}">
                        <i class="ri ri-user-4-line"></i><span>Data Putus Sekolah</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active != 'jumguru' ? 'collapsed' : 'active' }}"
                        href="{{ route('jumguru.index') }}">
                        <i class="ri ri-user-4-line"></i><span>Data Jumlah Guru</span>
                    </a>
                </li> --}}

                <li class="nav-item"> <a class="nav-link {{ ($active == 'bsda') ? 'active' : 'collapsed' }}"
                        data-bs-target="#bsda-nav" data-bs-toggle="collapse" href="#"> <i
                            class="fa-brands fa-envira"></i><span>Bidang SDA Lingkungan</span><i
                            class="bi bi-chevron-down ms-auto"></i> </a>
                    <ul id="bsda-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li> <a href="{{ route('bsda.index') }}"> <i class="bi bi-circle"></i><span>Data
                                    Korban Bencana</span> </a>
                        </li>
                    </ul>
                </li>
                {{-- <span>Data Terpilah Bidang Sda / Lingkungan</span>
                <li class="nav-item">
                    <a class="nav-link {{ $active != 'bsda' ? 'collapsed' : 'active' }}"
                        href="{{ route('bsda.index') }}">
                        <i class="ri ri-user-4-line"></i><span>Data Korban Bencana</span>
                    </a>
                </li> --}}

                <li class="nav-item"> <a class="nav-link {{ ($active == 'aktkerja') ? 'active' : 'collapsed' }}"
                        data-bs-target="#ekonomi-nav" data-bs-toggle="collapse" href="#"> <i
                            class="fa-solid fa-scale-balanced"></i><span>Bidang Ekonomi & Ketenaga Kerjaan</span><i
                            class="bi bi-chevron-down ms-auto"></i> </a>
                    <ul id="ekonomi-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li> <a href="{{ route('aktkerja.index') }}"> <i class="bi bi-circle"></i><span>Angkatan
                                    Kerja Berdasarkan Bidang Pendidikan</span> </a>
                        </li>
                    </ul>
                </li>
                {{-- <span>Data Terpilah Bidang Ekonomi / Ketenaga Kerjaan</span>
                <li class="nav-item">
                    <a class="nav-link {{ $active != 'aktkerja' ? 'collapsed' : 'active' }}"
                        href="{{ route('aktkerja.index') }}">
                        <i class="ri ri-user-4-line"></i><span>Angkatan Kerja Berdasarkan Bidang Pendidikan</span>
                    </a>
                </li> --}}

                <li class="nav-item"> <a class="nav-link {{ ($active == 'jumkades' || $active == 'pns' || $active == 'dprd') ? 'active' : 'collapsed' }}"
                        data-bs-target="#politik-nav" data-bs-toggle="collapse" href="#"> <i
                            class="fa-solid fa-landmark"></i><span>Bidang Politik</span><i
                            class="bi bi-chevron-down ms-auto"></i> </a>
                    <ul id="politik-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li> <a href="{{ route('jumkades.index') }}"> <i class="bi bi-circle"></i><span>Jumlah Kepala
                                    Desa</span> </a>
                        </li>
                        <li> <a href="{{ route('pns.index') }}"> <i class="bi bi-circle"></i><span>PNS Menurut
                                    Golongan / Jenis Kelamin</span> </a>
                        </li>
                        <li> <a href="{{ route('dprd.index') }}"> <i class="bi bi-circle"></i><span>DPRD Menurut
                                    komisi / Jenis Kelamin</span> </a>
                        </li>
                    </ul>
                </li>
                {{-- <span>Data Terpilah Bidang Politik</span>
                <li class="nav-item">
                    <a class="nav-link {{ $active != 'jumkades' ? 'collapsed' : 'active' }}"
                        href="{{ route('jumkades.index') }}">
                        <i class="ri ri-user-4-line"></i><span>Jumlah Kepala Desa</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active != 'pns' ? 'collapsed' : 'active' }}"
                        href="{{ route('pns.index') }}">
                        <i class="ri ri-user-4-line"></i><span>PNS Menurut Golongan / Jenis Kelamin</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active != 'dprd' ? 'collapsed' : 'active' }}"
                        href="{{ route('dprd.index') }}">
                        <i class="ri ri-user-4-line"></i><span>DPRD Menurut Komisi / Jenis Kelamin</span>
                    </a>
                </li> --}}

                <li class="nav-item"> <a class="nav-link {{ ($active == 'plapas' || $active == 'disabilitas') ? 'active' : 'collapsed' }}"
                        data-bs-target="#hukum-nav" data-bs-toggle="collapse" href="#"> <i
                            class="fa-solid fa-gavel"></i><span>Bidang Hukum / Sosial Budaya</span><i
                            class="bi bi-chevron-down ms-auto"></i> </a>
                    <ul id="hukum-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li> <a href="{{ route('plapas.index') }}"> <i class="bi bi-circle"></i><span>Penghuni
                                    Lapas</span> </a>
                        </li>
                        <li> <a href="{{ route('disabilitas.index') }}"> <i
                                    class="bi bi-circle"></i><span>Disabilitas</span> </a>
                        </li>
                    </ul>
                </li>
                {{-- <span>Data Terpilah Bidang Hukum / Sosial Budaya</span>
                <li class="nav-item">
                    <a class="nav-link {{ $active != 'penghunilapas' ? 'collapsed' : 'active' }}"
                        href="{{ route('plapas.index') }}">
                        <i class="ri ri-user-4-line"></i><span>Penghuni Lapas</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active != 'disabilitas' ? 'collapsed' : 'active' }}"
                        href="{{ route('disabilitas.index') }}">
                        <i class="ri ri-user-4-line"></i><span>Disabilitas</span>
                    </a>
                </li> --}}
                <li class="nav-item"> <a class="nav-link {{ ($active == 'jumkekerasan' || $active == 'jumkerlok') ? 'active' : 'collapsed' }}"
                    data-bs-target="#kekerasan-nav" data-bs-toggle="collapse" href="#"> <i class="fa-solid fa-hand-fist"></i><span>Kekerasan</span><i
                        class="bi bi-chevron-down ms-auto"></i> </a>
                <ul id="kekerasan-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li> <a href="{{ route('jumkekerasan.index') }}"> <i class="bi bi-circle"></i><span>Jumlah Kekerasan Terhadap Perempuan dan Anak</span> </a>
                    </li>
                    <li> <a href="{{ route('jumkerlok.index') }}"> <i
                                class="bi bi-circle"></i><span>Jumlah Kekerasan Terhadap Perempuan dan Anak Menurut Jenis Kelamin</span> </a>
                    </li>
                </ul>
            </li>
                {{-- <span>Kekerasan</span>
                <li class="nav-item">
                    <a class="nav-link {{ $active != 'jumkekerasan' ? 'collapsed' : 'active' }}"
                        href="{{ route('jumkekerasan.index') }}">
                        <i class="ri ri-user-4-line"></i><span>Jumlah Kekerasan terhdap Perempuan dan Anak</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active != 'jumkerlok' ? 'collapsed' : 'active' }}"
                        href="{{ route('jumkerlok.index') }}">
                        <i class="ri ri-user-4-line"></i><span>Jumlah Kekerasan terhdap Perempuan dan Anak Menurut
                            Jenis Kelamin</span>
                    </a>
                </li> --}}
            @endif

        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>{{ $pageTitle }}</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item text-capitalize"><a href="index.html">{{ $active }}</a></li>
                    <li class="breadcrumb-item active">{{ $pageTitle }}</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                @yield('content')
            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>Akatsuki</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="https://bootstrapmade.com/">Tim Akatsuki</a>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assetsAdmin') }}/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="{{ asset('assetsAdmin') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assetsAdmin') }}/vendor/chart.js/chart.min.js"></script>
    <script src="{{ asset('assetsAdmin') }}/vendor/echarts/echarts.min.js"></script>
    <script src="{{ asset('assetsAdmin') }}/vendor/quill/quill.min.js"></script>
    <script src="{{ asset('assetsAdmin') }}/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="{{ asset('assetsAdmin') }}/vendor/tinymce/tinymce.min.js"></script>
    <script src="{{ asset('assetsAdmin') }}/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assetsAdmin') }}/js/main.js"></script>
    {{-- DataTable JS --}}
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.dataTable').DataTable({
                responsive: true
            });
        });
    </script>
    @yield('scripts')

</body>

</html>
