@extends('admin')
@section('content')
<div class="col-md-12 col-12">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('plapas.update',$data->id) }}" method="post" class="row" enctype="multipart/form-data">
                @csrf
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
                        <option Value="Kepolisian" {{$data->sumber == 'Kepolisian' ? 'selected':''}}>Kepolisian</option>
                        <option Value="PPA" {{$data->sumber == 'PPA' ? 'selected':''}}>PPA</option>
                        <option value="Data Lainya" {{$data->sumber == 'Data Lainya' ? 'selected':''}}>Data Lainya</option>
                    </select>
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="ket" class="form-label">Keterangan</label>
                    <input type="text" class="form-control" class="form-control" name="ket" id="ket" value="{{$data->ket}}" required>
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="tahun_id" class="form-label">Tahun</label>
                    <input type="number" class="form-control" id="tahun_id" value="{{$data->tahun->nama_tahun}}" required readonly>
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="tahanan_id" class="form-label">Jenis Tahanan</label>
                    <input type="text" class="form-control" id="tahanan_id" value="{{$data->tahanan->jenis_tahanan}}" required readonly>
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