@extends('admin');
@section('content')
@if(auth()->user()->role == "admin")
    <!-- Left side columns -->
    <div class="col-lg-12">
        <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-4">
                <div class="card info-card sales-card">

                    <div class="card-body">
                        <h5 class="card-title">Desa</h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-house-door"></i>
                            </div>
                            <div class="ps-3">
                                <h6>{{ $desa }}</h6>
                                <span class="text-success small pt-1 fw-bold">12%</span> <span
                                    class="text-muted small pt-2 ps-1">increase</span>

                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-4">
                <div class="card info-card revenue-card">

                    <div class="card-body">
                        <h5 class="card-title">OPD</h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="ri ri-building-line"></i>
                            </div>
                            <div class="ps-3">
                                <h6>{{ $opd }}</h6>

                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- End Revenue Card -->

            <div class="col-xxl-4 col-md-4">
                <div class="card info-card revenue-card">

                    <div class="card-body">
                        <h5 class="card-title">Pekerjaan</h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-person-badge"></i>
                            </div>
                            <div class="ps-3">
                                <h6>{{ $pekerjaan }}</h6>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-xxl-4 col-md-4">
                <div class="card info-card revenue-card">


                    <div class="card-body">
                        <h5 class="card-title">Tahun</h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-calendar"></i>
                            </div>
                            <div class="ps-3">
                                <h6>{{ $tahun }}</h6>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Customers Card -->
            <div class="col-xxl-4 col-md-4">
                <div class="card info-card revenue-card">
    
                    <div class="card-body">
                        <h5 class="card-title">Agama</h5>
    
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="ri ri-user-2-fill"></i>
                            </div>
                            <div class="ps-3">
                                <h6>{{ $agama }}</h6>
                            </div>
                        </div>
                    </div>
    
                </div>
            </div>
            <!-- End Customers Card -->
            <div class="col-xxl-4 col-md-4">
                <div class="card info-card customers-card">
    
                    <div class="card-body">
                        <h5 class="card-title">Penduduk</h5>
    
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-people"></i>
                            </div>
                            <div class="ps-3">
                                <h6>1244</h6>
                            </div>
                        </div>
    
                    </div>
                </div>
            </div>
          

            {{-- <!-- Recent Sales -->
            <div class="col-12">
                <div class="card recent-sales overflow-auto">

                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>

                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Recent Sales <span>| Today</span></h5>

                        <table class="table table-borderless datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Customer</th>
                                    <th scope="col">Product</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"><a href="#">#2457</a></th>
                                    <td>Brandon Jacob</td>
                                    <td><a href="#" class="text-primary">At praesentium minu</a>
                                    </td>
                                    <td>$64</td>
                                    <td><span class="badge bg-success">Approved</span></td>
                                </tr>
                                <tr>
                                    <th scope="row"><a href="#">#2147</a></th>
                                    <td>Bridie Kessler</td>
                                    <td><a href="#" class="text-primary">Blanditiis dolor omnis
                                            similique</a></td>
                                    <td>$47</td>
                                    <td><span class="badge bg-warning">Pending</span></td>
                                </tr>
                                <tr>
                                    <th scope="row"><a href="#">#2049</a></th>
                                    <td>Ashleigh Langosh</td>
                                    <td><a href="#" class="text-primary">At recusandae
                                            consectetur</a></td>
                                    <td>$147</td>
                                    <td><span class="badge bg-success">Approved</span></td>
                                </tr>
                                <tr>
                                    <th scope="row"><a href="#">#2644</a></th>
                                    <td>Angus Grady</td>
                                    <td><a href="#" class="text-primar">Ut voluptatem id earum
                                            et</a></td>
                                    <td>$67</td>
                                    <td><span class="badge bg-danger">Rejected</span></td>
                                </tr>
                                <tr>
                                    <th scope="row"><a href="#">#2644</a></th>
                                    <td>Raheem Lehner</td>
                                    <td><a href="#" class="text-primary">Sunt similique
                                            distinctio</a></td>
                                    <td>$165</td>
                                    <td><span class="badge bg-success">Approved</span></td>
                                </tr>
                            </tbody>
                        </table>

                    </div>

                </div>
            </div><!-- End Recent Sales --> --}}

            <!-- Top Selling -->
            {{-- <div class="col-12">
                <div class="card top-selling overflow-auto">

                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filter</h6>
                            </li>

                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>

                    <div class="card-body pb-0">
                        <h5 class="card-title">Top Selling <span>| Today</span></h5>

                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th scope="col">Preview</th>
                                    <th scope="col">Product</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Sold</th>
                                    <th scope="col">Revenue</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"><a href="#"><img
                                                src="{{ asset('assetsAdmin') }}/img/product-1.jpg" alt=""></a>
                                    </th>
                                    <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa
                                            voluptas nulla</a></td>
                                    <td>$64</td>
                                    <td class="fw-bold">124</td>
                                    <td>$5,828</td>
                                </tr>
                                <tr>
                                    <th scope="row"><a href="#"><img
                                                src="{{ asset('assetsAdmin') }}/img/product-2.jpg" alt=""></a>
                                    </th>
                                    <td><a href="#" class="text-primary fw-bold">Exercitationem
                                            similique doloremque</a></td>
                                    <td>$46</td>
                                    <td class="fw-bold">98</td>
                                    <td>$4,508</td>
                                </tr>
                                <tr>
                                    <th scope="row"><a href="#"><img
                                                src="{{ asset('assetsAdmin') }}/img/product-3.jpg" alt=""></a>
                                    </th>
                                    <td><a href="#" class="text-primary fw-bold">Doloribus nisi
                                            exercitationem</a></td>
                                    <td>$59</td>
                                    <td class="fw-bold">74</td>
                                    <td>$4,366</td>
                                </tr>
                                <tr>
                                    <th scope="row"><a href="#"><img
                                                src="{{ asset('assetsAdmin') }}/img/product-4.jpg" alt=""></a>
                                    </th>
                                    <td><a href="#" class="text-primary fw-bold">Officiis quaerat
                                            sint rerum error</a></td>
                                    <td>$32</td>
                                    <td class="fw-bold">63</td>
                                    <td>$2,016</td>
                                </tr>
                                <tr>
                                    <th scope="row"><a href="#"><img
                                                src="{{ asset('assetsAdmin') }}/img/product-5.jpg" alt=""></a>
                                    </th>
                                    <td><a href="#" class="text-primary fw-bold">Sit unde debitis
                                            delectus repellendus</a></td>
                                    <td>$79</td>
                                    <td class="fw-bold">41</td>
                                    <td>$3,239</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>

                </div>
            </div><!-- End Top Selling --> --}}

        </div>
    </div><!-- End Left side columns -->
@else
<div class="col-lg-12">
    <div class="row">

        <!-- Sales Card -->
        <div class="col-xxl-4 col-md-4">
            <div class="card info-card sales-card">

                <div class="card-body">
                    <h5 class="card-title">Jumlah Penduduk Laki - Laki</h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-person"></i>
                        </div>
                        <div class="ps-3">
                            <h6>{{ $pendudukLaki }}</h6><span>Orang</span>

                        </div>
                    </div>
                </div>

            </div>
        </div><!-- End Sales Card -->
        <div class="col-xxl-4 col-md-4">
            <div class="card info-card sales-card">

                <div class="card-body">
                    <h5 class="card-title">Jumlah Penduduk Perempuan</h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-person-dress"></i>
                        </div>
                        <div class="ps-3">
                            <h6>{{ $pendudukPerempuan }}</h6><span>Orang</span>

                        </div>
                    </div>
                </div>

            </div>
        </div><!-- End Sales Card -->
        <div class="col-xxl-4 col-md-4">
            <div class="card info-card sales-card">

                <div class="card-body">
                    <h5 class="card-title">Jumlah Kematian Ibu Hamil</h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-person-pregnant"></i>
                        </div>
                        <div class="ps-3">
                            <h6>{{ $jumKematianIbu }}</h6><span>Ibu</span>

                        </div>
                    </div>
                </div>

            </div>
        </div><!-- End Sales Card -->
        <div class="col-xxl-4 col-md-4">
            <div class="card info-card sales-card">

                <div class="card-body">
                    <h5 class="card-title">Index Pemenuhan Hak Anak</h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-hands-holding-child"></i>
                        </div>
                        <div class="ps-3">
                            Total Bobot<h6>{{ $dataKlaster }}</h6>
                        </div>
                    </div>
                </div>

            </div>
        </div><!-- End Sales Card -->

        <!-- Revenue Card -->
        <div class="col-xxl-4 col-md-4">
            <div class="card info-card customers-card">
                <div class="card-body">
                    <h5 class="card-title">Korban Kekerasan Laki - Laki</h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-person-burst"></i>
                        </div>
                        <div class="ps-3">
                            <h6>{{ $jumKerL }}</h6>
                        </div>
                    </div>
                </div>

            </div>
        </div><!-- End Revenue Card -->  
        <div class="col-xxl-4 col-md-4">
            <div class="card info-card customers-card">
                <div class="card-body">
                    <h5 class="card-title">Korban Kekerasan Perempuan</h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-person-dress-burst"></i>
                        </div>
                        <div class="ps-3">
                            <h6>{{ $jumKerP }}</h6>
                        </div>
                    </div>
                </div>

            </div>
        </div><!-- End Revenue Card -->  
    </div>
</div><!-- End Left side columns -->
@endif
@endsection
