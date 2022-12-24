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
            
            <div class="col-lg-12">
                <a href="{{route('klasprespend.cetak')}}" class="btn btn-primary mb-2"><i class="fa-solid fa-print"></i></a>
                <table class="table table-hover table-bordered dataTable" id="dataTable">
                    <thead class="text-white" style="background-color:#37517E;">
                        <tr>
                            <th class="text-center" rowspan="2">No</th>
                            <th class="text-center" rowspan="2">Tahun</th>
                            <th class="text-center" rowspan="2">Desa</th>
                            <th class="text-center" colspan="2">Gender</th>
                            <th class="text-center" rowspan="2">Keterangan</th>
                            <th class="text-center" rowspan="2">Sumber</th>
                        </tr>
                        <tr>
                            <th class="text-center">L</th>
                            <th class="text-center">P</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $value=>$item)
                            <tr>
                                <td>{{$value+1}}</td>
                                <td>{{$item->tahun->nama_tahun}}</td>
                                <td>{{$item->desa->nama_desa}}</td>
                                <td>{{$item->l}} Orang</td>
                                <td>{{$item->p}} Orang</td>
                                <td>{{$item->ket}}</td>
                                <td>{{$item->sumber}}</td>
                            </tr>
                        @endforeach
                        
                    </tbody>

                </table>
            </div>
        </div>

    </div>
</section><!-- End About Us Section -->
@endsection