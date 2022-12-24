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
            <div class="card-header">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-kematianIbu-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-kematianIbu" type="button" role="tab"
                            aria-controls="pills-kematianIbu" aria-selected="true">Data Korban Bencana</button>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-kematianIbu" role="tabpanel"
                        aria-labelledby="pills-kematianIbu-tab">
                        <h5 class="">Data Korban Bencana</h5>
                        <a href="{{route('bsda.cetak')}}" class="btn btn-primary"><i class="fa-solid fa-print"></i></a>
                        <table class="table table-hover table-bordered dataTable w-100" id="dataTable">
                            <thead class="text-light" style="background-color:#37517E; height:100px">
                                <tr class="text-center">
                                    <th class="text-center align-middle" rowspan="2">No</th>
                                    <th class="text-center align-middle" rowspan="2">Tahun</th>
                                    <th class="text-center align-middle" rowspan="2">Jenis Bencana</th>
                                    <th class="text-center align-middle" colspan="2">Dewasa</th>
                                    <th class="text-center align-middle" colspan="2">Anak - anak</th>
                                    <th class="text-center align-middle" rowspan="2">Sumber</th>
                                    <th class="text-center align-middle" rowspan="2">Keterangan</th>
                                </tr>
                                <tr>
                                    <th class="text-center align-middle">Laki - laki</th>
                                    <th class="text-center align-middle">Perempuan</th>
                                    <th class="text-center align-middle">Laki - laki</th>
                                    <th class="text-center align-middle">Perempuan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $value=>$item)
                                    <tr>
                                        <td>{{ $value + 1 }}</td>
                                        <td>{{ $item->tahun->nama_tahun }}</td>
                                        <td>{{ $item->bencana->nama_bencana }}</td>
                                        <td>{{ $item->ldes }} Orang</td>
                                        <td>{{ $item->pdes }} Orang</td>
                                        <td>{{ $item->lan }} Orang</td>
                                        <td>{{ $item->pan }} Orang</td>
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