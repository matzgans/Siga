@extends('admin')
@section('content')
@if ($jum > 0)
    <div class="col-lg-12">
        <form action="{{ route('pengaturan.update',$data->id) }}" method="post">
                @csrf
            <div class="row">
                    <div class="col-xxl-4 col-md-8">
                        <div class="card info-card sales-card">

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-12 mb-2">
                                        <label for="sub_title" class="form-label">Sub Title</label>
                                        <textarea class="form-control" name="sub_title" id="subtitle" required>{{$data->sub_title}}</textarea>
                                    </div>
                                    <div class="col-md-12 col-12 mb-2">
                                        <label for="about" class="form-label">Tentang</label>
                                        <textarea class="form-control" name="about" id="about" required>{{$data->about}}</textarea>
                                    </div>
                                    <div class="col-md-12 col-12 mb-2">
                                        <label for="deskripsi" class="form-label">Deskripsi</label>
                                        <textarea class="form-control" name="deskripsi" id="deskripsi" required>{{$data->deskripsi}}</textarea>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xxl-4 col-md-4">
                        <div class="card info-card sales-card">

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-12 mb-2">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" class="form-control" name="title" id="title" value="{{$data->title}}" required>
                                    </div>
                                    <div class="col-md-12 col-12 mb-2">
                                        <label for="contack" class="form-label">contact</label>
                                        <input type="text" class="form-control" name="contack" id="contack" value="{{$data->contack}}" required>
                                    </div>
                                    <button class="btn btn-warning col-md-11 mx-auto text-white" type="submit"><b>Update</b></button>
                                </div>
                            </div>

                        </div>
                    </div>
            </div>
        </form>

            
    </div><!-- End Left side columns --> 
   
@else
    <div class="col-lg-12">
        <form action="{{route('pengaturan.store')}}" method="post">
                @csrf
            <div class="row">
                    <div class="col-xxl-4 col-md-8">
                        <div class="card info-card sales-card">

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-12 mb-2">
                                        <label for="sub_title" class="form-label">Sub Title</label>
                                        <textarea class="form-control" name="sub_title" id="subtitle" required></textarea>
                                    </div>
                                    <div class="col-md-12 col-12 mb-2">
                                        <label for="about" class="form-label">Tentang</label>
                                        <textarea class="form-control" name="about" id="about" required></textarea>
                                    </div>
                                    <div class="col-md-12 col-12 mb-2">
                                        <label for="deskripsi" class="form-label">Deskripsi</label>
                                        <textarea class="form-control" name="deskripsi" id="deskripsi" required></textarea>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xxl-4 col-md-4">
                        <div class="card info-card sales-card">

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-12 mb-2">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" class="form-control" name="title" id="title">
                                    </div>
                                    <div class="col-md-12 col-12 mb-2">
                                        <label for="contack" class="form-label">contact</label>
                                        <input type="text" class="form-control" name="contack" id="contack">
                                    </div>
                                    <button class="btn btn-success col-md-12" type="submit">Tambah</button>
                                </div>
                            </div>

                        </div>
                    </div>
            </div>
        </form>

            
    </div><!-- End Left side columns --> 
@endif

@endsection