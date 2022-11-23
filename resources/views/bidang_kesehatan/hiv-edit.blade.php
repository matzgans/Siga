@extends('admin')
@section('content')
<div class="col-md-12 col-12">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('hiv.update',$data->id) }}" method="post" class="row" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6 col-12 mb-2">
                    <label for="desa" class="form-label">Desa</label>
                    <input type="text" class="form-control" id="desa_id" value="{{$data->desa->nama_desa}}" readonly>
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="l" class="form-label">Jumlah Laki - Laki</label>
                    <input type="number" class="form-control" name="l" id="l" value="{{$data->l}}">
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="p" class="form-label">Jumlah Perempuan</label>
                    <input type="number" class="form-control" name="p" id="p" value="{{$data->p}}">
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="sumber" class="form-label">Sumber</label>
                    <select class="form-select" name="sumber" id="sumber" aria-label="Default select example">
                        <option selected>Sumber</option>
                        <option Value="Dinas Kesahatan" {{$data->sumber == "Dinas Kesahatan" ? 'selected':''}}>Dinas Kesahatan</option>
                        <option Value="Puskesmas" {{$data->sumber == "Dinas Kesehatan" ? 'selected':''}}>Puskesmas</option>
                        <option value="Desa" {{$data->sumber == "Dinas Kesehatan" ? 'selected':''}}>Desa</option>
                        <option value="Data Lainya" {{$data->sumber == "Dinas Kesehatan" ? 'selected':''}}>Data Lainya</option>
                    </select>
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="tahun" class="form-label">Tahun</label>
                    <input type="number" class="form-control" id="tahun" value="{{$data->tahun->nama_tahun}}" readonly>
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="ket" class="form-label">Keterangan</label>
                    <textarea name="ket" class="form-control" id="ket" placeholder="{{$data->ket}}">{{$data->ket}}</textarea>
                </div>
                <div class="col-md-12 col-12 mb-2">
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
    
@endsection