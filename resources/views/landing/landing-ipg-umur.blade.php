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
                <div class="card">
                    <div class="card-body">
                        <a href="{{route('prespenduduk.cetak')}}" class="btn btn-primary mb-2"><i class="fa-solid fa-print"></i> Cetak Data</a>
                        <table class="table table-hover table-bordered dataTable" id="dataTable">
                            <thead class="text-white align-middle" style="background-color: #37517e">
                                <tr>
                                    <th class="text-center align-middle" rowspan="3">No</th>
                                    <th class="text-center align-middle" rowspan="3">Tahun</th>
                                    <th class="text-center align-middle" rowspan="3">Desa</th>
                                    <th class="text-center align-middle" colspan="10">Umur</th>
                                </tr>
                                <tr>
                                    <th class="text-center align-middle" colspan="2">0 - 5</th>
                                    <th class="text-center align-middle" colspan="2">6 - 12</th>
                                    <th class="text-center align-middle" colspan="2">13 - 17</th>
                                    <th class="text-center align-middle" colspan="2">18 - 50</th>
                                    <th class="text-center align-middle" colspan="2">51 +</th>
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
                                    <th class="text-center align-middle">L</th>
                                    <th class="text-center align-middle">P</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $value=>$item)
                                    <tr>
                                        <td>{{$value+1}}</td>
                                        <td>{{$item->tahun->nama_tahun}}</td>
                                        <td>{{$item->desa->nama_desa}}</td>
                                        <td>{{$item->l0}} Orang</td>
                                        <td>{{$item->p0}} Orang</td>
                                        <td>{{$item->l6}} Orang</td>
                                        <td>{{$item->p6}} Orang</td>
                                        <td>{{$item->l13}} Orang</td>
                                        <td>{{$item->p13}} Orang</td>
                                        <td>{{$item->l18}} Orang</td>
                                        <td>{{$item->p18}} Orang</td>
                                        <td>{{$item->l51}} Orang</td>
                                        <td>{{$item->p51}} Orang</td>
                                    </tr>
                                @endforeach
                            </tbody>
        
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section><!-- End About Us Section -->
@endsection