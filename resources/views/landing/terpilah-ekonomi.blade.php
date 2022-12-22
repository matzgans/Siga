@extends('landing')

@section('content')
<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-12 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                data-aos="fade-up" data-aos-delay="200">
                <h1>{{$title}}</h1>
                <p class="text-white">{{$subtitle}}</p>
            </div>
        </div>
    </div>

</section><!-- End Hero -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>{{$title}}</h2>
        </div>

                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-kematianIbu-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-kematianIbu" type="button" role="tab"
                            aria-controls="pills-kematianIbu" aria-selected="true">Angkatan Kerja</button>
                    </li>
                    <li class="nav-item ms-auto">
                        <button class="btn btn-success"><i class="fa-solid fa-print"></i></button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-kematianIbu" role="tabpanel"
                        aria-labelledby="pills-kematianIbu-tab">
                        <h5 class="">Angkatan Kerja Berdasarkan Pendidikan</h5>
                        <table class="table table-hover table-bordered dataTable" id="dataTable">
                            <thead class="text-light" style="background-color:#37517E; height:100px">
                                <tr class="text-center">
                                    <th class="text-center align-middle" rowspan="3">No</th>
                                    <th class="text-center align-middle" rowspan="3">Tahun</th>
                                    <th class="text-center align-middle" rowspan="3">Desa</th>
                                    <th class="text-center align-middle" colspan="8">Jenjang Pendidikan</th>
                                    <th class="text-center align-middle" rowspan="3">Sumber</th>
                                    <th class="text-center align-middle" rowspan="3">Keterangan</th>
                                </tr>
                                <tr>
                                    <th class="text-center align-middle" colspan="2">SD</th>
                                    <th class="text-center align-middle" colspan="2">SMP</th>
                                    <th class="text-center align-middle" colspan="2">SMA</th>
                                    <th class="text-center align-middle" colspan="2">PT</th>
                                </tr>
                                <tr>
                                    <th class="text-center align-middle">L</th>
                                    <th class="text-center align-middle">P</th>
                                    <th class="text-center align-middle">L</th>
                                    <th class="text-center align-middle">P</th>
                                    <th class="text-center align-middle">L</th>
                                    <th class="text-center align-middle">P</th>
                                    <th class="text-center align-middle">L</th>
                                    <th class="text-center align-middle">P</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $value=>$item)
                                    <tr>
                                        <td>{{ $value + 1 }}</td>
                                        <td>{{ $item->tahun->nama_tahun }}</td>
                                        <td>{{ $item->desa->nama_desa }}</td>
                                        <td>{{ $item->lsd }} Orang</td>
                                        <td>{{ $item->psd }} Orang</td>
                                        <td>{{ $item->lsmp }} Orang</td>
                                        <td>{{ $item->psmp }} Orang</td>
                                        <td>{{ $item->lsma }} Orang</td>
                                        <td>{{ $item->psma }} Orang</td>
                                        <td>{{ $item->lpt }} Orang</td>
                                        <td>{{ $item->ppt }} Orang</td>
                                        <td>{{ $item->sumber }}</td>
                                        <td>{{ $item->ket }}</td>
                                    </tr>
                                @empty
                                    Data belum di input
                                @endforelse
                            </tbody>

                        </table>
                    </div>
                </div>
        </div>

    </div>
</section><!-- End About Us Section -->
@endsection