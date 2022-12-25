@extends('landing')

@section('content')
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>{{ $title }}</h1>
                    <p class="text-white">{{ $subtitle }}</p>
                </div>
            </div>
        </div>

    </section><!-- End Hero -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>{{ $title }}</h2>
            </div>

            <div class="row content">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-kematianIbu-tab" data-bs-toggle="pill"
                                        data-bs-target="#sd" type="button" role="tab" aria-controls="pills-kematianIbu" style="margin-top:10px"
                                        aria-selected="true">Sekolah Dasar</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-kematianBayi-tab" data-bs-toggle="pill"
                                        data-bs-target="#smp" type="button" role="tab"
                                        aria-controls="pills-kematianBayi" aria-selected="false">Sekolah Menengah Pertama</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-penderitaHiv-tab" data-bs-toggle="pill"
                                        data-bs-target="#sma" type="button" role="tab"
                                        aria-controls="pills-penderitaHiv" aria-selected="false">Sekolah Menengah Atas</button>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body" style="overflow-y: auto">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="sd" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <table class="table table-sm table-bordered dataTable" id="dataTable" style="width: 100%">
                                        <thead class="text-white align-middle" style="background-color: #37517e">
                                            <tr class="text-center">
                                                <th class="text-center align-middle" rowspan="2">No.</th>
                                                <th class="text-center align-middle" rowspan="2">Desa</th>
                                                <th class="text-center align-middle" colspan="2">Sekolah Dasar</th>
                                                <th class="text-center align-middle" rowspan="2">Sumber</th>
                                                <th class="text-center align-middle" rowspan="2">Tahun</th>
                                            </tr>
                                            <tr class="text-center">
                                                <th class="text-center align-middle">Putus</th>
                                                <th class="text-center align-middle">Lulus</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($data as $value => $item)
                                                <tr>
                                                    <td>{{$value + 1}}</td>
                                                    <td>{{$item->desa->nama_desa}}</td>
                                                    <td>{{$item->psd}} %</td>
                                                    <td>{{$item->lsd}} %</td>
                                                    <td>{{$item->sumber}}</td>
                                                    <td>{{$item->tahun->nama_tahun}}</td>
                                                </tr>
                                            @empty
                                                
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="smp" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <table class="table table-sm table-bordered dataTable" id="dataTable" style="width: 100%">
                                        <thead class="text-white align-middle" style="background-color: #37517e">
                                            <tr class="text-center">
                                                <th class="text-center align-middle" rowspan="2">No.</th>
                                                <th class="text-center align-middle" rowspan="2">Desa</th>
                                                <th class="text-center align-middle" colspan="2">Sekolah Menengah Pertama</th>
                                                <th class="text-center align-middle" rowspan="2">Sumber</th>
                                                <th class="text-center align-middle" rowspan="2">Tahun</th>
                                            </tr>
                                            <tr class="text-center">
                                                <th class="text-center align-middle">Putus</th>
                                                <th class="text-center align-middle">Lulus</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($data as $value => $item)
                                                <tr>
                                                    <td>{{$value + 1}}</td>
                                                    <td>{{$item->desa->nama_desa}}</td>
                                                    <td>{{$item->psmp}} %</td>
                                                    <td>{{$item->lsmp}} %</td>
                                                    <td>{{$item->sumber}}</td>
                                                    <td>{{$item->tahun->nama_tahun}}</td>
                                                </tr>
                                            @empty
                                                
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="sma" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <table class="table table-sm table-bordered dataTable" id="dataTable" style="width: 100%">
                                        <thead class="text-white align-middle" style="background-color: #37517e">
                                            <tr class="text-center">
                                                <th class="text-center align-middle" rowspan="2">No.</th>
                                                <th class="text-center align-middle" rowspan="2">Desa</th>
                                                <th class="text-center align-middle" colspan="2">Sekolah Menengah Atas</th>
                                                <th class="text-center align-middle" rowspan="2">Sumber</th>
                                                <th class="text-center align-middle" rowspan="2">Tahun</th>
                                            </tr>
                                            <tr class="text-center">
                                                <th class="text-center align-middle">Putus</th>
                                                <th class="text-center align-middle">Lulus</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($data as $value => $item)
                                                <tr>
                                                    <td>{{$value + 1}}</td>
                                                    <td>{{$item->desa->nama_desa}}</td>
                                                    <td>{{$item->psma}} %</td>
                                                    <td>{{$item->lsma}} %</td>
                                                    <td>{{$item->sumber}}</td>
                                                    <td>{{$item->tahun->nama_tahun}}</td>
                                                </tr>
                                            @empty
                                                
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End About Us Section -->
@endsection
