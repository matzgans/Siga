@extends('admin')

@section('content')
<div class="col-md-12 col-12 mb-2">
    <button type="button" class="btn btn-sm mb-3 btn-primary" data-bs-toggle="modal"
        data-bs-target="#staticBackdrop">
        <i class="bi bi-plus-lg"></i> Tambah Data pegawai
    </button>
    <a type="button" href="" class="btn btn-sm mb-3 btn-primary" >
        <i class="bi bi-plus-lg"></i> cetak
    </a>
    <div class="card">
        <div class="card-body">
            @if(Session('message'))
                <div class="alert alert-danger" role="alert">
                    {{Session('message')}}
                </div>
            @endif
            <p class="card-title">Data Hiv / Aids</p>
            <table class="table table-hover" id="dataTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $value=>$item)
                        <tr>
                            <td>{{$value+1}}</td>
                            <td>{{$item->nama}}</td>
                            <td>{{$item->user->email}}</td>
                            <td>
                                <a href="{{ route('pegawai.destroy', $item->id) }}"
                                    class="btn btn-danger btn-sm rounded-circle"><i
                                        class="ri ri-delete-bin-line"></i></a>
                                <a href="{{ route('pegawai.edit', $item->id) }}"
                                    class="btn btn-warning btn-sm rounded-circle"><i
                                        class="ri ri-person-bin-line"></i>edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Pegawai</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('pegawai.store')}}" method="post" class="row" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12 col-12 mb-2">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="nama" class="form-control" name="nama" id="nama" required>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

   
@endsection
@section('scripts')
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>