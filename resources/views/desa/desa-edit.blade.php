@extends('admin')
@section('content')
<div class="col-md-12 col-xs-12 col-12">
<div class="card">
    <div class="card-body">
        <form action="{{route('desa.update',$data->id)}}" method="POST" class="row">
            @csrf
            <div class="col-md-6 col-12 mb-2">
                <label for="nama_desa">Nama Desa</label>
                <input type="text" name="nama_desa" id="nama_desa" value="{{$data->nama_desa}}" required class="form-control">
            </div>
            <div class="col-md-6 col-12 mb-2">
                <label for="kepala_desa">Kepala Desa</label>
                <input type="text" name="kepala_desa" id="kepala_desa" value="{{$data->kepala_desa}}" required class="form-control">
            </div>
            <div class="row">
                <div class="col-6">
                    <button type="submit" class="btn btn-warning text-white">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
  
@endsection