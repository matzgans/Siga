@extends('admin')
@section('content')
<div class="col-md-12 col-12">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('prespendidikan.update',$data->id) }}" method="post" class="row" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12 col-12 mb-2">
                    <label for="desa" class="form-label">Desa</label>
                    <input type="text" class="form-control" id="desa_id" value="{{$data->desa->nama_desa}}" required readonly>
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="lb" class="form-label">L(Tdk / Belum Sekolah)</label>
                    <input type="number" class="form-control" name="lb" class="floatNumberField" placeholder="0.00" step="0.01" id="lb" value="{{$data->lb}}" required />
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="pb" class="form-label">P(Tdk / Belum Sekolah)</label>
                    <input type="number" class="form-control" name="pb" class="floatNumberField" placeholder="0.00" step="0.01" id="pb" value="{{$data->pb}}" required />
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="lsd" class="form-label">L(Tdk / Belum Tamat SD)</label>
                    <input type="number" class="form-control" name="lsd" class="floatNumberField" placeholder="0.00" step="0.01" id="lsd" value="{{$data->lsd}}" required />
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="psd" class="form-label">P(Tdk / Belum Tamat SD)</label>
                    <input type="number" class="form-control" name="psd" class="floatNumberField" placeholder="0.00" step="0.01" id="psd" value="{{$data->psd}}" required />
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="lsmp" class="form-label">P(SMP)</label>
                    <input type="number" class="form-control" name="lsmp" class="floatNumberField" placeholder="0.00" step="0.01" id="lsmp" value="{{$data->lsmp}}" required />
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="psmp" class="form-label">P(SMP)</label>
                    <input type="number" class="form-control" name="psmp" class="floatNumberField" placeholder="0.00" step="0.01" id="psmp" value="{{$data->psmp}}" required />
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="lsma" class="form-label">L(SMA)</label>
                    <input type="number" class="form-control" name="lsma" class="floatNumberField" placeholder="0.00" step="0.01" id="lsma" value="{{$data->lsma}}" required />
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="psma" class="form-label">P(SMA)</label>
                    <input type="number" class="form-control" name="psma" class="floatNumberField" placeholder="0.00" step="0.01" id="psma" value="{{$data->psma}}" required />
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="lpt" class="form-label">P(Perguruan Tinggi)</label>
                    <input type="number" class="form-control" name="lpt" class="floatNumberField" placeholder="0.00" step="0.01" id="lpt" value="{{$data->lpt}}" required />
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="ppt" class="form-label">P(Perguruan Tinggi)</label>
                    <input type="number" class="form-control" name="ppt" class="floatNumberField" placeholder="0.00" step="0.01" id="ppt" value="{{$data->ppt}}" required />
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="ket" class="form-label">Keterangan</label>
                    <input type="text" class="form-control" class="form-control" name="ket" id="ket" value="{{$data->ket}}" required>
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="sumber" class="form-label">Sumber</label>
                    <select class="form-select" name="sumber" id="sumber" aria-label="Default select example" required>
                        <option selected>Sumber</option>
                        <option value="Bps" {{$data->sumber == 'Bps' ? 'selected':''}}>Bps</option>
                        <option value="Desa" {{$data->sumber == 'Desa'? 'selected':''}}>Desa</option>
                        <option value="Data Lainya" {{$data->sumber == 'Data Lainya'? 'selected':''}}>Data Lainya</option>
                    </select>
                </div>
                <div class="col-md-12 col-12 mb-2">
                    <label for="tahun" class="form-label">Tahun</label>
                    <input type="number" class="form-control" id="tahun" value="{{$data->tahun->nama_tahun}}" required readonly>
                </div>
                <div class="col-md-12 col-12 mb-2">
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
    
@endsection
@section('scripts')
<script>
        $(document).ready(function () {
            $(".floatNumberField").change(function() {
                $(this).val(parseFloat($(this).val()).toFixed(2));
            });
        });
</script>

@endsection