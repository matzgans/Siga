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
                <table class="table table-hover table-bordered dataTable" id="dataTable">
                    <thead>
                        <tr>
                            <th rowspan="2">No</th>
                            <th rowspan="2">Desa</th>
                            <th colspan="2">0 - 5</th>
                            <th colspan="2">6 - 12</th>
                            <th colspan="2">13 - 17</th>
                            <th colspan="2">18 - 50</th>
                            <th colspan="2">51 <</th>
                            <th rowspan="2">Tahun</th>
                        </tr>
                        <tr>
                            <td>L</td>
                            <td>P</td>
                            <td>L</td>
                            <td>P</td>
                            <td>L</td>
                            <td>P</td>
                            <td>L</td>
                            <td>P</td>
                            <td>L</td>
                            <td>P</td>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>

                </table>
            </div>
        </div>

    </div>
</section><!-- End About Us Section -->
@endsection