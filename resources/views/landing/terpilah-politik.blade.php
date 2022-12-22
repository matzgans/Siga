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
                            data-bs-target="#jumKades" type="button" role="tab"
                            aria-controls="pills-kematianIbu" aria-selected="true">Jumlah Kepala Desa</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-kematianBayi-tab" data-bs-toggle="pill"
                            data-bs-target="#dataPns" type="button" role="tab"
                            aria-controls="pills-kematianBayi" aria-selected="false">PNS</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-penderitaHiv-tab" data-bs-toggle="pill"
                            data-bs-target="#dprd" type="button" role="tab"
                            aria-controls="pills-penderitaHiv" aria-selected="false">DPRD</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="jumKades" role="tabpanel"
                        aria-labelledby="pills-kematianIbu-tab">
                        <h5 class="">Jumlah Kepala Desa</h5>
                        <table class="table table-hover table-bordered dataTable" id="dataTable">
                            <thead class="text-light" style="background-color:#37517E; height:100px">
                                <tr>
                                    <th class="text-center align-middle" rowspan="2">No</th>
                                    <th class="text-center align-middle" rowspan="2">Tahun</th>
                                    <th class="text-center align-middle" colspan="2">Jenis Kelamin</th>
                                    <th class="text-center align-middle" rowspan="2">Sumber</th>
                                    <th class="text-center align-middle" rowspan="2">Keterangan</th>
                                </tr>
                                <tr>
                                    <th class="text-center align-middle">Laki - laki</th>
                                    <th class="text-center align-middle">Perempuan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $value=>$item)
                                    <tr>
                                        <td>{{ $value + 1 }}</td>
                                        <td>{{ $item->tahun->nama_tahun }}</td>
                                        <td>{{ $item->l }} Orang</td>
                                        <td>{{ $item->p }} Orang</td>
                                        <td>{{ $item->sumber }}</td>
                                        <td>{{ $item->ket }}</td>
                                    </tr>
                                @empty
                                    Data belum di input
                                @endforelse
                            </tbody>

                        </table>
                    </div>
                    <div class="tab-pane fade" id="dataPns" role="tabpanel"
                        aria-labelledby="pills-kematianBayi-tab">
                        <h5 class="">PNS </h5>
                        <table class="table table-hover table-bordered dataTable w-100" id="dataTable">
                            <thead class="text-light" style="background-color:#37517E; height:100px">
                                <tr>
                                    <th class="text-center align-middle" rowspan="2">No</th>
                                    <th class="text-center align-middle" rowspan="2">Tahun</th>
                                    <th class="text-center align-middle" rowspan="2">Golongan</th>
                                    <th class="text-center align-middle" colspan="2">Jenis Kelamin</th>
                                    <th class="text-center align-middle" rowspan="2">Sumber</th>
                                    <th class="text-center align-middle" rowspan="2">Keterangan</th>
                                </tr>
                                <tr>
                                    <th class="text-center align-middle">Laki - laki</th>
                                    <th class="text-center align-middle">Perempuan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($pns as $value=>$item)
                                    <tr>
                                        <td>{{ $value + 1 }}</td>
                                        <td>{{ $item->tahun->nama_tahun }}</td>
                                        <td>{{ $item->golongan }}</td>
                                        <td>{{ $item->l }} Orang</td>
                                        <td>{{ $item->p }} Orang</td>
                                        <td>{{ $item->sumber }}</td>
                                        <td>{{ $item->ket }}</td>
                                    </tr>
                                @empty
                                    Data belum di input
                                @endforelse
                            </tbody>

                        </table>
                    </div>
                    <div class="tab-pane fade" id="dprd" role="tabpanel"
                        aria-labelledby="pills-penderitaHiv-tab">
                        <h5 class="card-title">Penderita HIV/AIDS</h5>
                    </div>
                </div>

    </div>
</section><!-- End About Us Section -->
@endsection