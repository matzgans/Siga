@extends('admin')
@section('content')
<div class="col-md-12 col-12">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('ipha.update',$data->id) }}" method="post" class="row" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12 col-12 mb-2">
                    <label for="tahun" class="form-label">Tahun</label>
                    <input type="number" class="form-control" id="tahun" value="{{$data->tahun->nama_tahun}}" required readonly>
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="klaster" class="form-label">Klaster</label>
                    <input type="text" class="form-control" id="klaster" value="{{$data->klaster}}" required readonly>
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="bobot" class="form-label">Bobot</label>
                    <input type="number" class="form-control" name="bobot" id="bobot" value="{{$data->bobot}}" required>
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
</script>

@endsection