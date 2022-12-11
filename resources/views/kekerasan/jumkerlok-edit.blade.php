@extends('admin')
@section('content')
<div class="col-md-12 col-12">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('jumkerlok.update',$data->id) }}" method="post" class="row" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6 col-12 mb-2">
                    <label for="desa" class="form-label">Desa</label>
                    <input type="text" class="form-control" id="desa_id" value="{{$data->desa->nama_desa}}" readonly>
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="bs" class="form-label">Belum Sekolah</label>
                    <input type="number" class="form-control" name="bs" id="bs" value="{{$data->sd}}" required>
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="sd" class="form-label">SD</label>
                    <input type="number" class="form-control" name="sd" id="sd" value="{{$data->sd}}" required>
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="smp" class="form-label">SMP</label>
                    <input type="number" class="form-control" name="smp" id="smp" value="{{$data->smp}}" required>
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="sma" class="form-label">SMA</label>
                    <input type="number" class="form-control" name="sma" id="sma" value="{{$data->sma}}" required>
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="pt" class="form-label">Pt/Sarjan/Diploma</label>
                    <input type="number" class="form-control" name="pt" id="pt" value="{{$data->pt}}" required>
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="sumber" class="form-label">Sumber</label>
                    <select class="form-select" name="sumber" id="sumber" aria-label="Default select example">
                        <option Value="PPPA" {{$data->sumber == "PPPA" ? 'selected':''}}>PPPA</option>
                        <option Value="Kepolisian" {{$data->sumber == "Kepolisian" ? 'selected':''}}>Kepolisian</option>
                        <option value="Desa" {{$data->sumber == "Desa" ? 'selected':''}}>Desa</option>
                        <option value="Data Lainya" {{$data->sumber == "Data Lainya" ? 'selected':''}}>Data Lainya</option>
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