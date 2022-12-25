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

            <div class="card">
                <div class="card-header">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-kematianIbu-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-kematianIbu" type="button" role="tab" aria-controls="pills-kematianIbu"
                                aria-selected="true">Kematian Ibu Hamil</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-kematianBayi-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-kematianBayi" type="button" role="tab"
                                aria-controls="pills-kematianBayi" aria-selected="false">Kematian Bayi</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-penderitaHiv-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-penderitaHiv" type="button" role="tab"
                                aria-controls="pills-penderitaHiv" aria-selected="false">Penderita HIV/AIDS</button>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-kematianIbu" role="tabpanel"
                            aria-labelledby="pills-kematianIbu-tab">
                            <h5 class="">Penyebab Kematian Ibu Hamil</h5>
                            <a href="{{route('pkematian.cetak')}}" class="btn btn-primary m-2"><i class="fa-solid fa-print"></i> Cetak Data</a>
                            <table class="table table-hover table-bordered dataTable" id="dataTable">
                                <thead class="text-light" style="background-color:#37517E; height:100px">
                                    <tr class="align-middle text-center">
                                        <th class="text-center">No</th>
                                        <th class="text-center">Tahun</th>
                                        <th class="text-center">Desa</th>
                                        <th class="text-center">Jumlah kematian</th>
                                        <th class="text-center">Partus Lama</th>
                                        <th class="text-center">Infeksi</th>
                                        <th class="text-center">Hipertensi</th>
                                        <th class="text-center">Pendarahan</th>
                                        <th class="text-center">Penyebab Lainya</th>
                                        <th class="text-center">Keterangan</th>
                                        <th class="text-center">Sumber</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data as $value=>$item)
                                        <tr>
                                            <td>{{ $value + 1 }}</td>
                                            <td>{{ $item->tahun->nama_tahun }}</td>
                                            <td>{{ $item->desa->nama_desa }}</td>
                                            <td>{{ $item->jum_partuslama +
                                                $item->jum_infeksi +
                                                $item->jum_hirpetensi +
                                                $item->jum_pendarahan +
                                                $item->jum_penyebablain }}
                                                Orang</td>
                                            <td>{{ $item->jum_partuslama }} KH</td>
                                            <td>{{ $item->jum_infeksi }} Orang</td>
                                            <td>{{ $item->jum_hirpetensi }} Orang</td>
                                            <td>{{ $item->jum_pendarahan }} Orang</td>
                                            <td>{{ $item->jum_penyebablain }} Orang</td>
                                            <td>{{ $item->ket }}</td>
                                            <td>{{ $item->sumber }}</td>
                                        </tr>
                                    @empty
                                        Data belum di input
                                    @endforelse
                                </tbody>
        
                            </table>
                        </div>
                        <div class="tab-pane fade" id="pills-kematianBayi" role="tabpanel" aria-labelledby="pills-kematianBayi-tab">
                            <h5 class="">Penyebab Kematian Bayi</h5>
                            <a href="{{route('kmtbayi.cetak')}}" class="btn btn-primary m-2"><i class="fa-solid fa-print"></i> Cetak Data</a>
                            <table class="table table-hover table-bordered dataTable w-100" id="dataTable">
                                <thead class="text-light" style="background-color:#37517E; height:100px">
                                    <tr class="align-middle text-center">
                                        <th class="text-center" rowspan="2">No</th>
                                        <th class="text-center" rowspan="2">Tahun</th>
                                        <th class="text-center" rowspan="2">Desa</th>
                                        <th class="text-center" colspan="2">Jenis Kelamin</th>
                                        <th class="text-center" rowspan="2">Sumber</th>
                                        <th class="text-center" rowspan="2">Keterangan</th>
                                    </tr>
                                    <tr>
                                        <th class="text-center">Laki-laki</th>
                                        <th class="text-center">Perempuan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($dataKmtbayi as $value=>$item)
                                        <tr>
                                            <td>{{ $value + 1 }}</td>
                                            <td>{{ $item->tahun->nama_tahun }}</td>
                                            <td>{{ $item->desa->nama_desa }}</td>
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
                        <div class="tab-pane fade" id="pills-penderitaHiv" role="tabpanel" aria-labelledby="pills-penderitaHiv-tab">
                            <h5 class="">Penderita HIV/AIDS</h5>
                            <a href="{{route('hiv.cetak')}}" class="btn btn-primary m-2"><i class="fa-solid fa-print"></i> Cetak Data</a>
                            <table class="table table-hover table-bordered dataTable w-100" id="dataTable">
                                <thead class="text-light" style="background-color:#37517E; height:100px">
                                    <tr class="align-middle">
                                        <th class="text-center" rowspan="2">No</th>
                                        <th class="text-center" rowspan="2">Tahun</th>
                                        <th class="text-center" rowspan="2">Desa</th>
                                        <th class="text-center" colspan="2">Jenis Kelamin</th>
                                        <th class="text-center" rowspan="2">Sumber</th>
                                        <th class="text-center" rowspan="2">Keterangan</th>
                                    </tr>
                                    <tr>
                                        <th class="text-center">Laki - Laki</th>
                                        <th class="text-center">Perempuan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($hiv as $value=>$item)
                                        <tr>
                                            <td>{{ $value + 1 }}</td>
                                            <td>{{ $item->tahun->nama_tahun }}</td>
                                            <td>{{ $item->desa->nama_desa }}</td>
                                            <td>{{ $item->p }} orang</td>
                                            <td>{{ $item->l }} orang</td>
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
