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
                        data-bs-target="#partsekolah" type="button" role="tab" aria-controls="home"
                        aria-selected="true">Data Partisipasi Sekolah</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#ptssekolah"
                        type="button" role="tab" aria-controls="contact"
                        aria-selected="false"> Data Putus Sekolah</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                        data-bs-target="#jumguru" type="button" role="tab" aria-controls="contact"
                        aria-selected="false">Jumlah Guru</button>
                </li>
            </ul>
            <div class="card-body">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="partsekolah" role="tabpanel"
                        aria-labelledby="pills-kematianIbu-tab">
                        <h5 class="">Data Partisipasi Sekolah</h5>
                        <a href="{{route('partsekolah.cetak')}}" class="btn btn-primary"><i class="fa-solid fa-print"></i></a>
                        <table class="table table-hover table-bordered dataTable" id="dataTable">
                            <thead class="text-light" style="background-color:#37517E; width:100px">
                                <tr class="align-middle">
                                    <th class="text-center" rowspan="3">No</th>
                                    <th class="text-center" rowspan="3">Tahun</th>
                                    <th class="text-center" rowspan="3">Desa</th>
                                    <th class="text-center" colspan="8">Umur</th>
                                    <th class="text-center" rowspan="3">Sumber</th>
                                    <th class="text-center" rowspan="3">Keterangan</th>
                                </tr>
                                <tr>
                                    <th class="text-center" colspan="2">7 - 12</th>
                                    <th class="text-center" colspan="2">13 - 15</th>
                                    <th class="text-center" colspan="2">16 - 18</th>
                                    <th class="text-center" colspan="2">19 - 24</th>
                                </tr>
                                <tr>
                                    <th class="text-center">L</th>
                                    <th class="text-center">P</th>
                                    <th class="text-center">L</th>
                                    <th class="text-center">P</th>
                                    <th class="text-center">L</th>
                                    <th class="text-center">P</th>
                                    <th class="text-center">L</th>
                                    <th class="text-center">P</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $value=>$item)
                                    <tr>
                                        <td>{{ $value + 1 }}</td>
                                        <td>{{ $item->tahun->nama_tahun }}</td>
                                        <td>{{ $item->desa->nama_desa }}</td>
                                        <td>{{ $item->l7 }}%</td>
                                        <td>{{ $item->p7 }}%</td>
                                        <td>{{ $item->l13 }}%</td>
                                        <td>{{ $item->p13 }}%</td>
                                        <td>{{ $item->l16 }}%</td>
                                        <td>{{ $item->p16 }}%</td>
                                        <td>{{ $item->l19 }}%</td>
                                        <td>{{ $item->p19 }}%</td>
                                        <td>{{ $item->sumber }}</td>
                                        <td>{{ $item->ket }}</td>
                                    </tr>
                                @empty
                                    Data belum di input
                                @endforelse
                            </tbody>

                        </table>
                    </div>
                    <div class="tab-pane fade" id="ptssekolah" role="tabpanel"
                        aria-labelledby="pills-kematianBayi-tab">
                        <h5 class="">Data Putus Sekolah</h5>
                        <a href="{{route('ptssekolah.cetak')}}" class="btn btn-primary"><i class="fa-solid fa-print"></i></a>
                        <table class="table table-hover table-bordered dataTable w-100" id="dataTable">
                            <thead class="text-light" style="background-color:#37517E; width:100px">
                                <tr class="align-middle">
                                    <th class="text-center" rowspan="3">No</th>
                                    <th class="text-center" rowspan="3">Tahun</th>
                                    <th class="text-center" rowspan="3">Desa</th>
                                    <th class="text-center" colspan="6">Jenjang Sekolah</th>
                                    <th class="text-center" rowspan="3">Sumber</th>
                                    <th class="text-center" rowspan="3">Keterangan</th>
                                </tr>
                                <tr>
                                    <th class="text-center" colspan="2">SD</th>
                                    <th class="text-center" colspan="2">SMP</th>
                                    <th class="text-center" colspan="2">SMA</th>
                                </tr>
                                <tr>
                                    <th class="text-center">L</th>
                                    <th class="text-center">P</th>
                                    <th class="text-center">L</th>
                                    <th class="text-center">P</th>
                                    <th class="text-center">L</th>
                                    <th class="text-center">P</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($ptsSekolah as $value=>$item)
                                    <tr>
                                        <td>{{ $value + 1 }}</td>
                                        <td>{{ $item->tahun->nama_tahun }}</td>
                                        <td>{{ $item->desa->nama_desa }}</td>
                                        <td>{{ $item->lsd }}%</td>
                                        <td>{{ $item->psd }}%</td>
                                        <td>{{ $item->lsmp }}%</td>
                                        <td>{{ $item->psmp }}%</td>
                                        <td>{{ $item->lsma }}%</td>
                                        <td>{{ $item->psma }}%</td>
                                        <td>{{ $item->sumber }}</td>
                                        <td>{{ $item->ket }}</td>
                                    </tr>
                                @empty
                                    Data belum di input
                                @endforelse
                            </tbody>

                        </table>
                    </div>
                    <div class="tab-pane fade" id="jumguru" role="tabpanel"
                        aria-labelledby="pills-penderitaHiv-tab">
                        <h5 class="">Jumlah Guru</h5>
                        <a href="{{route('jumguru.cetak')}}" class="btn btn-primary"><i class="fa-solid fa-print"></i></a>
                        <table class="table table-hover table-bordered dataTable w-100" id="dataTable">
                            <thead class="text-light" style="background-color:#37517E;">
                                <tr>
                                    <th class="text-center align-middle" rowspan="2">No</th>
                                    <th class="text-center align-middle" rowspan="2">Tahun</th>
                                    <th class="text-center align-middle" colspan="2">Jenis Kelamin</th>
                                    <th class="text-center align-middle" rowspan="2">Jumlah</th>
                                    <th class="text-center align-middle" rowspan="2">Sumber</th>
                                    <th class="text-center align-middle" rowspan="2">Keterangan</th>
                                </tr>
                                <tr>
                                    <th class="text-center align-middle">Laki - Laki</th>
                                    <th class="text-center align-middle">Perempuan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($jumGuru as $value=>$item)
                                    <tr>
                                        <td>{{ $value + 1 }}</td>
                                        <td>{{ $item->tahun->nama_tahun }}</td>
                                        <td>{{ $item->l }} orang</td>
                                        <td>{{ $item->p }} orang</td>
                                        <td>{{ $item->jum }} orang</td>
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