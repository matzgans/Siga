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

        <div class="card">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                        data-bs-target="#prespend" type="button" role="tab" aria-controls="home"
                        aria-selected="true">Presentase Penduduk</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#jenkel"
                        type="button" role="tab" aria-controls="profile" aria-selected="false">Jenis
                        Kelamin</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#kelumur"
                        type="button" role="tab" aria-controls="contact"
                        aria-selected="false">Kelompok Umur</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                        data-bs-target="#pendter" type="button" role="tab" aria-controls="contact"
                        aria-selected="false">Pendidikan Terakhir</button>
                </li>
            </ul>
            <div class="card-body">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="prespend" role="tabpanel"
                        aria-labelledby="pills-kematianIbu-tab">
                        <h5 class="card-title"></h5>
                        <table class="table table-hover table-bordered dataTable" id="dataTable">
                            <thead class="text-light" style="background-color:#37517E;">
                                <tr>
                                    <th rowspan="2">No</th>
                                    <th rowspan="2">Tahun</th>
                                    <th rowspan="2">Desa</th>
                                    <th colspan="2">0</th>
                                    <th colspan="2">6</th>
                                    <th colspan="2">13</th>
                                    <th colspan="2">18</th>
                                    <th colspan="2">51</th>
                                    <th rowspan="2">Sumber</th>
                                </tr>
                                <tr>
                                    <th>L</th>
                                    <th>P</th>
                                    <th>L</th>
                                    <th>P</th>
                                    <th>L</th>
                                    <th>P</th>
                                    <th>L</th>
                                    <th>P</th>
                                    <th>L</th>
                                    <th>P</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $value=>$item)
                                    <tr>
                                        <td>{{ $value + 1 }}</td>
                                        <td>{{ $item->tahun->nama_tahun }}</td>
                                        <td>{{ $item->desa->nama_desa }}</td>
                                        <td>{{ $item->l0 }}</td>
                                        <td>{{ $item->p0 }}</td>
                                        <td>{{ $item->l6 }}</td>
                                        <td>{{ $item->p6 }}</td>
                                        <td>{{ $item->l13 }}</td>
                                        <td>{{ $item->p13 }}</td>
                                        <td>{{ $item->l18 }}</td>
                                        <td>{{ $item->p18 }}</td>
                                        <td>{{ $item->l51 }}</td>
                                        <td>{{ $item->p51 }}</td>
                                        <td>{{ $item->sumber }}</td>
                                    </tr>
                                @empty
                                    Data belum di input
                                @endforelse
                            </tbody>

                        </table>
                    </div>
                    <div class="tab-pane fade" id="pills-kematianBayi" role="tabpanel"
                        aria-labelledby="pills-kematianBayi-tab">
                        <h5 class="card-title">Penyebab Kematian Bayi</h5>
                        <table class="table table-hover table-bordered dataTable" id="dataTable">
                            <thead class="text-light" style="background-color:#37517E;">
                                <tr>
                                    <th>No</th>
                                    <th>Tahun</th>
                                    <th>Desa</th>
                                    <th>Jumlah kematian</th>
                                    <th>Partus Lama</th>
                                    <th>Infeksi</th>
                                    <th>Hipertensi</th>
                                    <th>Pendarahan</th>
                                    <th>Penyebab Lainya</th>
                                    <th>Sumber</th>
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
                                        <td>{{ $item->sumber }}</td>
                                    </tr>
                                @empty
                                    Data belum di input
                                @endforelse
                            </tbody>

                        </table>
                    </div>
                    <div class="tab-pane fade" id="pills-penderitaHiv" role="tabpanel"
                        aria-labelledby="pills-penderitaHiv-tab">
                        <h5 class="card-title">Penderita HIV/AIDS</h5>
                        <table class="table table-hover table-bordered dataTable" id="dataTable">
                            <thead class="text-light" style="background-color:#37517E;">
                                <tr>
                                    <th>No</th>
                                    <th>Tahun</th>
                                    <th>Desa</th>
                                    <th>Laki - Laki</th>
                                    <th>Perempuan</th>
                                    <th>Sumber</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($ptsSekolah as $value=>$item)
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

    </div>
</section><!-- End About Us Section -->
@endsection