@extends('admin')
@section('content')
<div class="col-md-12 col-12">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('bsda.update',$data->id) }}" method="post" class="row" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12 col-12 mb-2">
                    <label for="bencana_id" class="form-label">Jenis Bencana</label>
                    <select class="form-select" name="bencana_id" id="bencana_id" aria-label="Default select example">
                        <option selected>Sumber</option>
                        @foreach ($bencana as $item)    
                            <option value="{{$item->id}}" {{$item->id == $data->bencana_id ? 'selected':''}}>{{$item->nama_bencana}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="ldes" class="form-label">L (Dewasa)</label>
                    <input type="number" class="form-control" name="ldes" id="ldes" value="{{$data->ldes}}" required>
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="pdes" class="form-label">P (Dewasa)</label>
                    <input type="number" class="form-control" name="pdes" id="pdes" value="{{$data->ldes}}" required>
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="lan" class="form-label">L (Anak - Anak)</label>
                    <input type="number" class="form-control" name="lan" id="lan" value="{{$data->lan}}" required>
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="pan" class="form-label">P (Anak - Anak)</label>
                    <input type="number" class="form-control" name="pan" id="pan" value="{{$data->pan}}" required>
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="sumber" class="form-label">Sumber</label>
                    <select class="form-select" name="sumber" id="sumber" aria-label="Default select example">
                        <option selected>Sumber</option>
                        <option Value="Bpbd" {{$data->sumber == 'Bpbd' ? 'selected':''}}>Bpbd</option>
                        <option Value="Basarnas" {{$data->sumber == 'Basarnas' ? 'selected':''}}>Basarnas</option>
                        <option value="Data Lainya" {{$data->sumber == 'Data Lainya' ? 'selected':''}}>Data Lainya</option>
                    </select>
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="ket" class="form-label">Keterangan</label>
                    <input type="text" class="form-control" class="form-control" name="ket" id="ket" value="{{$data->ket}}" required>
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