@extends('admin')
@section('content')
<div class="col-md-12 col-12">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('ptssekolah.update',$data->id) }}" method="post" class="row" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12 col-12 mb-2">
                    <label for="desa" class="form-label">Desa</label>
                    <input type="text" class="form-control" id="desa_id" value="{{$data->desa->nama_desa}}" required readonly>
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="lsd" class="form-label">L(SD)</label>
                    <input type="number" class="form-control" name="lsd" class="floatNumberField" value="{{$data->lsd}}" placeholder="0.00" step="0.01" id="l7" required />
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="psd" class="form-label">P(SD)</label>
                    <input type="number" class="form-control" name="psd" class="floatNumberField" value="{{$data->psd}}" placeholder="0.00" step="0.01" id="p7" required />
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="lsmp" class="form-label">L(SMP)</label>
                    <input type="number" class="form-control" name="lsmp" class="floatNumberField" value="{{$data->lsmp}}" placeholder="0.00" step="0.01" id="l13" required />
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="psmp" class="form-label">P(SMP)</label>
                    <input type="number" class="form-control" name="psmp" class="floatNumberField" value="{{$data->psmp}}" placeholder="0.00" step="0.01" id="p13" required />
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="lsma" class="form-label">L(SMA)</label>
                    <input type="number" class="form-control" name="lsma" class="floatNumberField" value="{{$data->lsma}}" placeholder="0.00" step="0.01" id="l16" required />
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="psma" class="form-label">P(SMA)</label>
                    <input type="number" class="form-control" name="psma" class="floatNumberField" value="{{$data->psma}}" placeholder="0.00" step="0.01" id="p16" required />
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="ket" class="form-label">Keterangan</label>
                    <input type="text" class="form-control" class="form-control" name="ket" id="ket" value="{{$data->ket}}" required>
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="sumber" class="form-label">Sumber</label>
                    <input type="text" class="form-control" class="form-control" name="sumber" id="sumber" value="{{$data->sumber}}" required>
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