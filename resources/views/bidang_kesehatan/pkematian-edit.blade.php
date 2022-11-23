@extends('admin')
@section('content')
<div class="col-md-12 col-12">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('pkematian.update',$data->id) }}" method="post" class="row" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6 col-12 mb-2">
                    <label for="desa" class="form-label">Desa</label>
                    <input type="text" class="form-control" id="desa_id" value="{{$data->desa->nama_desa}}" readonly>
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="jum_partuslama" class="form-label">Jumlah Partuslama</label>
                    <input type="number" class="form-control" name="jum_partuslama" id="jum_partuslama" value="{{$data->jum_partuslama}}">
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="jum_infeksi" class="form-label">Jumlah Infeksi</label>
                    <input type="number" class="form-control" name="jum_infeksi" id="jum_infeksi" value="{{$data->jum_infeksi}}">
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="jum_hirpetensi" class="form-label">Jumlah Hipertensi</label>
                    <input type="number" class="form-control" name="jum_hirpetensi" id="jum_hirpetensi" value="{{$data->jum_hirpetensi}}">
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="jum_pendarahan" class="form-label">Jumlah Pendarahan</label>
                    <input type="number" class="form-control" name="jum_pendarahan" id="jum_pendarahan" value="{{$data->jum_pendarahan}}">
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="jum_penyebablain" class="form-label">Jumlah Penyebab Lain</label>
                    <input type="number" class="form-control" name="jum_penyebablain" id="jum_penyebablain" value="{{$data->jum_penyebablain}}">
                </div>
                <div class="col-md-12 col-12 mb-2">
                    <label for="tahun" class="form-label">Tahun</label>
                    <input type="number" class="form-control" id="tahun" value="{{$data->tahun->nama_tahun}}" readonly>
                </div>
                <div class="col-md-12 col-12 mb-2">
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
    
@endsection