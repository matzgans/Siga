@extends('admin')
@section('content')
<div class="col-md-12 col-12">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('partsekolah.update',$data->id) }}" method="post" class="row" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12 col-12 mb-2">
                    <label for="desa" class="form-label">Desa</label>
                    <input type="text" class="form-control" id="desa_id" value="{{$data->desa->nama_desa}}" required readonly>
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="l7" class="form-label">L(7-12)</label>
                    <input type="number" class="form-control" name="l7" class="floatNumberField" value="{{$data->l7}}" placeholder="0.00" step="0.01" id="l7" required />
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="p7" class="form-label">P(7-12)</label>
                    <input type="number" class="form-control" name="p7" class="floatNumberField" value="{{$data->p7}}" placeholder="0.00" step="0.01" id="p7" required />
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="l13" class="form-label">L(13-15)</label>
                    <input type="number" class="form-control" name="l13" class="floatNumberField" value="{{$data->l13}}0" placeholder="0.00" step="0.01" id="l13" required />
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="p13" class="form-label">P(13-15)</label>
                    <input type="number" class="form-control" name="p13" class="floatNumberField" value="{{$data->p13}}" placeholder="0.00" step="0.01" id="p13" required />
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="l16" class="form-label">L(16-18)</label>
                    <input type="number" class="form-control" name="l16" class="floatNumberField" value="{{$data->l16}}" placeholder="0.00" step="0.01" id="l16" required />
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="p16" class="form-label">P(16-18)</label>
                    <input type="number" class="form-control" name="p16" class="floatNumberField" value="{{$data->p16}}" placeholder="0.00" step="0.01" id="p16" required />
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="l19" class="form-label">L(19-14)</label>
                    <input type="number" class="form-control" name="l19" class="floatNumberField" value="{{$data->l19}}" placeholder="0.00" step="0.01" id="l19" required />
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="p19" class="form-label">P(19-14)</label>
                    <input type="number" class="form-control" name="p19" class="floatNumberField" value="{{$data->p19}}" placeholder="0.00" step="0.01" id="p19" required />
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
                    <div class="col-md-12 col-12 mb-2">
                        <label for="tahun" class="form-label">Tahun</label>
                        <input type="number" class="form-control" id="tahun" value="{{$data->tahun->nama_tahun}}" required readonly>
                    </div>
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