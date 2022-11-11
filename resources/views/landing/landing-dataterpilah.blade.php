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
                <div class="card">
                    <div class="card-body">
                        <table class="table table-hover table-bordered dataTable" id="dataTable">
                            <thead>
                                <tr>
                                    <th>Desa</th>
                                    <th>Desa</th>
                                    <th>Desa</th>
                                </tr>
                            </thead>
                            </tbody> 
        
                        </table>
                    </div>
                </div>
                
            </div>
            <div class="col-lg-12 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">Penyebab Kematian Ibu Hamil</div>
                        <table class="table table-hover table-bordered dataTable" id="dataTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tahun</th>
                                    <th>Desa</th>
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
</section><!-- End About Us Section -->
@endsection