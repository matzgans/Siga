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

        <div class="row content">
            <div class="col-lg-12 mb-3">
                <div class="d-flex align-items-start">
                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                      <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Jumlah Dan Penyebab Kematian Ibu Hamil</button>
                      <button class="nav-link" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-jumbayi" type="button" role="tab" aria-controls="v-pills-home" aria-selected="false">Jumlah Kematian Bayi</button>
                      <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Penderita Hiv / Aids</button>
                    </div>
                    <div class="tab-content" id="v-pills-tabContent">
                      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Penyebab Kematian Ibu Hamil</h5>
                                <table class="table table-hover table-bordered dataTable" id="dataTable">
                                    <thead class="bg-success text-light">
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
                                            <td>{{$value+1}}</td>
                                            <td>{{$item->tahun->nama_tahun}}</td>
                                            <td>{{$item->desa->nama_desa}}</td>
                                            <td>{{$item->jum_partuslama +$item->jum_infeksi + $item->jum_hirpetensi
                                            + $item->jum_pendarahan +$item->jum_penyebablain}}  Orang</td>
                                            <td>{{$item->jum_partuslama}} KH</td>
                                            <td>{{$item->jum_infeksi}} Orang</td>
                                            <td>{{$item->jum_hirpetensi}} Orang</td>
                                            <td>{{$item->jum_pendarahan}} Orang</td>
                                            <td>{{$item->jum_penyebablain}} Orang</td>
                                            <td>{{$item->sumber}}</td>
                                        </tr>
                                        @empty
                                            Data belum di input
                                        @endforelse
                                    </tbody>
                
                                </table>
                            </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="v-pills-jumbayi" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Penyebab Kematian Ibu Hamil</h5>
                                <table class="table table-hover table-bordered dataTable" id="dataTable">
                                    <thead class="bg-success text-light">
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
                                            <td>{{$value+1}}</td>
                                            <td>{{$item->tahun->nama_tahun}}</td>
                                            <td>{{$item->desa->nama_desa}}</td>
                                            <td>{{$item->jum_partuslama +$item->jum_infeksi + $item->jum_hirpetensi
                                            + $item->jum_pendarahan +$item->jum_penyebablain}}  Orang</td>
                                            <td>{{$item->jum_partuslama}} KH</td>
                                            <td>{{$item->jum_infeksi}} Orang</td>
                                            <td>{{$item->jum_hirpetensi}} Orang</td>
                                            <td>{{$item->jum_pendarahan}} Orang</td>
                                            <td>{{$item->jum_penyebablain}} Orang</td>
                                            <td>{{$item->sumber}}</td>
                                        </tr>
                                        @empty
                                            Data belum di input
                                        @endforelse
                                    </tbody>
                
                                </table>
                            </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Penyebab Kematian Ibu Hamil</h5>
                                <table class="table table-hover table-bordered dataTable" id="dataTable">
                                    <thead class="bg-success text-light">
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
                                            <td>{{$value+1}}</td>
                                            <td>{{$item->tahun->nama_tahun}}</td>
                                            <td>{{$item->desa->nama_desa}}</td>
                                            <td>{{$item->jum_partuslama +$item->jum_infeksi + $item->jum_hirpetensi
                                            + $item->jum_pendarahan +$item->jum_penyebablain}}  Orang</td>
                                            <td>{{$item->jum_partuslama}} KH</td>
                                            <td>{{$item->jum_infeksi}} Orang</td>
                                            <td>{{$item->jum_hirpetensi}} Orang</td>
                                            <td>{{$item->jum_pendarahan}} Orang</td>
                                            <td>{{$item->jum_penyebablain}} Orang</td>
                                            <td>{{$item->sumber}}</td>
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
                
            </div>
        </div>

    </div>
</section><!-- End About Us Section -->
@endsection