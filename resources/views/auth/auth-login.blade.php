<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Login - SIGA</title>
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

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <main>
        <div class="container">

            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <img src="{{asset('foto_landing')}}/SIgafix.png" alt="" style="width:100px;">
                                <a href="index.html" class="logo d-flex align-items-center w-auto">
                                    {{-- <span class="d-none d-lg-block">SIGA - Bone Bolango</span> --}}
                                </a>
                            </div><!-- End Logo -->

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4 mb-5">Masuk Ke Akun</h5>
                                        @if (Session('message'))
                                            <div class="alert alert-danger" role="alert">
                                                {{ Session('message') }}
                                            </div>
                                        @endif
                                    </div>

                                    <form class="row g-3 needs-validation" action="{{ route('auth.loginproses') }}"
                                        method="post" novalidate>
                                        @csrf

                                        <div class="col-12">
                                            <div class="input-group has-validation">
                                                <input type="email" name="email" id="email"
                                                    class="@error('email') is-invalid @enderror form-control text-center rounded-pill"
                                                    placeholder="Username" required>
                                                @error('email')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <input type="password" name="password" id="password"
                                                class="@error('password') is-invalid @enderror form-control text-center rounded-pill"
                                                placeholder="Password" required>
                                            @error('password')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <input class="btn btn-primary w-100" type="submit" value="Submit">
                                        </div>
                                        <div class="col-12">
                                            <p class="small mb-0">Belum Punya Akun? <a
                                                    href="{{ route('register') }}">Buat Disini</a></p>
                                        </div>
                                    </form>

                                </div>
                            </div>

                            <div class="credits">
                                <!-- All the links in the footer should remain intact. -->
                                <!-- You can delete the links only if you purchased the pro version. -->
                                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                                Designed by <a href="https://bootstrapmade.com/">Akatsuki</a>
                            </div>

                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->

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

</body>

</html>
