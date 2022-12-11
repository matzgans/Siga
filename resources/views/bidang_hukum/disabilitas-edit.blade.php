@extends('admin')
@section('content')
<div class="col-md-12 col-12">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('disabilitas.update',$data->id) }}" method="post" class="row" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12 col-12 mb-2">
                    <label for="jenis_disabilitas" class="form-label">Disabilitas</label>
                    <select class="form-select" name="jenis_disabilitas" id="jenis_disabilitas" aria-label="Default select example" required>
                        <option selected>Jenis Disabilitas</option>
                        <option Value="Tuna Wicara" {{$data->jenis_disabilitas == 'Tuna Wicara' ? 'selected':''}}>Tuna Wicara</option>
                        <option Value="Tuna Rungu" {{$data->jenis_disabilitas == 'Tuna Rungu' ? 'selected':''}}>Tuna Rungu</option>
                        <option value="Data Lainya" {{$data->jenis_disabilitas == 'Data Lainya' ? 'selected':''}}>Data Lainya</option>
                    </select>
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="l" class="form-label">Laki - Laki</label>
                    <input type="number" class="form-control" name="l" id="l" value="{{$data->l}}" required>
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="p" class="form-label">Perempuan</label>
                    <input type="number" class="form-control" name="p" id="p" value="{{$data->p}}" required>
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="sumber" class="form-label">Sumber</label>
                    <select class="form-select" name="sumber" id="sumber" aria-label="Default select example" required>
                        <option selected>Sumber</option>
                        <option Value="Dinas Kesehatan" {{$data->sumber == 'Dinas Kesehatan' ? 'selected':''}}>Dinas Kesehatan</option>
                        <option Value="Puskesmas" {{$data->sumber == 'Puskesmas' ? 'selected':''}}>Puskesmas</option>
                        <option value="Data Lainya" {{$data->sumber == 'Data Lainya' ? 'selected':''}}>Data Lainya</option>
                    </select>
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="ket" class="form-label">Keterangan</label>
                    <input type="text" class="form-control" class="form-control" name="ket" id="ket" value="{{$data->ket}}" required>
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="desa_id" class="form-label">Desa</label>
                    <input type="text" class="form-control" id="desa_id" value="{{$data->desa->nama_desa}}" required readonly>
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="tahun_id" class="form-label">Tahun</label>
                    <input type="number" class="form-control" id="tahun_id" value="{{$data->tahun->nama_tahun}}" required readonly>
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