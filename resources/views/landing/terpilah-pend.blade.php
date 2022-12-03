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
                        data-bs-target="#home" type="button" role="tab" aria-controls="home"
                        aria-selected="true">Presentase Penduduk</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                        type="button" role="tab" aria-controls="profile" aria-selected="false">Jenis
                        Kelamin</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                        type="button" role="tab" aria-controls="contact"
                        aria-selected="false">Kelompok Umur</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                        data-bs-target="#contact" type="button" role="tab" aria-controls="contact"
                        aria-selected="false">Pendidikan Terakhir</button>
                </li>
            </ul>
            <div class="card-body">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-kematianIbu" role="tabpanel"
                        aria-labelledby="pills-kematianIbu-tab">
                        <h5 class="card-title"></h5>
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