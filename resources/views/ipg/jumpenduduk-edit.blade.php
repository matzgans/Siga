@extends('admin')
@section('content')
<div class="col-md-12 col-12">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('prespenduduk.update',$data->id) }}" method="post" class="row" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12 col-12 mb-2">
                    <label for="desa" class="form-label">Desa</label>
                    <input type="text" class="form-control" id="desa_id" value="{{$data->desa->nama_desa}}" readonly>
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="l0" class="form-label">L (0 - 5)</label>
                    <input type="number" class="form-control" name="l0" id="l0" value="{{$data->l0}}" required>
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="p0" class="form-label">P (0 - 5)</label>
                    <input type="number" class="form-control" name="p0" id="p0" value="{{$data->p0}}" required>
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="l6" class="form-label">L (6 - 12)</label>
                    <input type="number" class="form-control" name="l6" id="l6" value="{{$data->l6}}" required>
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="p6" class="form-label">P (6 - 12)</label>
                    <input type="number" class="form-control" name="p6" id="p6" value="{{$data->p6}}" required>
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="l13" class="form-label">L (13 - 17)</label>
                    <input type="number" class="form-control" name="l13" id="l13" value="{{$data->l13}}" required>
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="p13" class="form-label">P (13 - 17)</label>
                    <input type="number" class="form-control" name="p13" id="p13" value="{{$data->p13}}" required>
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="l18" class="form-label">L (18 - 50)</label>
                    <input type="number" class="form-control" name="l18" id="l18" value="{{$data->l18}}" required>
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="p18" class="form-label">P (18 - 50)</label>
                    <input type="number" class="form-control" name="p18" id="p18" value="{{$data->p18}}" required>
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="l51" class="form-label">L (51 +)</label>
                    <input type="number" class="form-control" name="l51" id="l51" value="{{$data->l51}}" required>
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="p51" class="form-label">P (51 +)</label>
                    <input type="number" class="form-control" name="p51" id="p51" value="{{$data->p51}}" required>
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="ket" class="form-label">Keterangan</label>
                    <input type="text" class="form-control" name="ket" id="ket" value="{{$data->ket}}" required>
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="sumber" class="form-label">Sumber</label>
                    <input type="text" class="form-control" name="sumber" id="sumber" value="{{$data->sumber}}" required>
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