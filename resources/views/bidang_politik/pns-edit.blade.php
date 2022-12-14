@extends('admin')
@section('content')
<div class="col-md-12 col-12">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('pns.update',$data->id) }}" method="post" class="row" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12 col-12 mb-2">
                    <label for="golongan" class="form-label">Golongan</label>
                    <input type="text" class="form-control" id="golongan" value="{{$data->golongan}}" required readonly>
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="l" class="form-label">Laki - Laki</label>
                    <input type="number" class="form-control" name="l" id="l" value="{{$data->l}}" required>
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="p" class="form-label">Perempuan</label>
                    <input type="number" class="form-control" name="p" id="p" value="{{$data->p}}" required>
                </div>
                <div class="col-md-12 col-12 mb-2">
                    <label for="tahun" class="form-label">Tahun</label>
                    <input type="number" class="form-control" id="tahun" value="{{$data->tahun->nama_tahun}}" required readonly>
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="sumber" class="form-label">Sumber</label>
                    <select class="form-select" name="sumber" id="sumber" aria-label="Default select example" required>
                        <option selected>Sumber</option>
                        <option Value="Bps" {{$data->sumber == 'Bps' ? 'selected':''}}>Bps</option>
                        <option Value="Bkd" {{$data->sumber == 'Bkd' ? 'selected':''}}>Bkd</option>
                        <option value="Data Lainya" {{$data->sumber == 'Data Lainya' ? 'selected':''}}>Data Lainya</option>
                    </select>
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="ket" class="form-label">Keterangan</label>
                    <input type="text" class="form-control" class="form-control" name="ket" id="ket" value="{{$data->ket}}" required>
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