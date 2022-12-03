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
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#sd"
                                    type="button" role="tab" aria-controls="home" aria-selected="true">SD</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#smp"
                                    type="button" role="tab" aria-controls="profile" aria-selected="false">SMP</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#sma"
                                    type="button" role="tab" aria-controls="contact" aria-selected="false">SMA</button>
                            </li>
                        </ul>
                        <div class="card-body" style="overflow-y: auto">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="sd" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <table class="table table-sm table-bordered dataTable" id="dataTable" style="width: 100%">
                                        <thead class="text-white align-middle" style="background-color: #37517e">
                                            <tr class="text-center">
                                                <th rowspan="2">No.</th>
                                                <th rowspan="2">Desa</th>
                                                <th colspan="2">Sekolah Dasar</th>
                                                <th rowspan="2">Sumber</th>
                                                <th rowspan="2">Tahun</th>
                                            </tr>
                                            <tr class="text-center">
                                                <th>Putus</th>
                                                <th>Lulus</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($data as $value => $item)
                                                <tr>
                                                    <td>{{$value + 1}}</td>
                                                    <td>{{$item->desa->nama_desa}}</td>
                                                    <td>{{$item->ptssekolah?->psd}}</td>
                                                    <td>{{$item->ptssekolah?->lsd}}</td>
                                                    <td>{{$item->ptssekolah?->sumber}}</td>
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
                                                <th rowspan="2">No.</th>
                                                <th rowspan="2">Desa</th>
                                                <th colspan="2">Sekolah Menengah Pertama</th>
                                                <th rowspan="2">Sumber</th>
                                                <th rowspan="2">Tahun</th>
                                            </tr>
                                            <tr class="text-center">
                                                <th>Putus</th>
                                                <th>Lulus</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($data as $value => $item)
                                                <tr>
                                                    <td>{{$value + 1}}</td>
                                                    <td>{{$item->desa->nama_desa}}</td>
                                                    <td>{{$item->ptssekolah?->psd}}</td>
                                                    <td>{{$item->ptssekolah?->lsd}}</td>
                                                    <td>{{$item->ptssekolah?->sumber}}</td>
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
                                                <th rowspan="2">No.</th>
                                                <th rowspan="2">Desa</th>
                                                <th colspan="2">Sekolah Menengah Atas</th>
                                                <th rowspan="2">Sumber</th>
                                                <th rowspan="2">Tahun</th>
                                            </tr>
                                            <tr class="text-center">
                                                <th>Putus</th>
                                                <th>Lulus</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($data as $value => $item)
                                                <tr>
                                                    <td>{{$value + 1}}</td>
                                                    <td>{{$item->desa->nama_desa}}</td>
                                                    <td>{{$item->ptssekolah?->psd}}</td>
                                                    <td>{{$item->ptssekolah?->lsd}}</td>
                                                    <td>{{$item->ptssekolah?->sumber}}</td>
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
