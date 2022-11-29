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
                        <table class="table table-hover table-bordered dataTable" id="dataTable">
                            <thead class="text-white" style="background-color:#37517E;">
                                <tr>
                                    <th class="text-center" rowspan="2">No</th>
                                    <th class="text-center" rowspan="2">Desa</th>
                                    <th class="text-center" colspan="2">Gender</th>
                                    <th class="text-center" rowspan="2">Tahun</th>
                                </tr>
                                <tr>
                                    <th class="text-center">L</th>
                                    <th class="text-center">P</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
        
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section><!-- End About Us Section -->
@endsection