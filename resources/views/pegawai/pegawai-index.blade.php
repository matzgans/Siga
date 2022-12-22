@extends('admin')

@section('content')
<div class="col-md-12 col-12 mb-2">
    <button type="button" class="btn btn-sm mb-3 btn-primary" data-bs-toggle="modal"
        data-bs-target="#staticBackdrop">
        <i class="bi bi-plus-lg"></i> Tambah Data pegawai
    </button>
    <div class="card">
        <div class="card-body" style="overflow-y: auto">
            <p class="card-title">Data Pegawai</p>
            @if(Session('message'))
                <div class="alert alert-success" role="alert">
                    {{Session('message')}}
                </div>
            @endif
            <div class="overflow-auto">
                <table class="table table-hover table-bordered" id="dataTable" >
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pegawai</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $value => $item)
                            <tr>
                                <td>{{ $value + 1 }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->user->email }}</td>
                                <td>
                                    <a href="{{ route('pegawai.edit', $item->id) }}"
                                        class="btn btn-warning btn-sm rounded-circle"><i
                                            class="ri ri-edit-box-fill"></i></a>
                                    <a href="#"
                                        class="delete btn btn-danger text-white btn-sm rounded-circle" data-id="{{$item->id}}" data-name="{{$item->nama}}"><i
                                            class="ri ri-delete-bin-line"></i></a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
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

        $('.delete').click( function(){
            var delete_nama = $(this).attr('data-name');
            var delete_id = $(this).attr('data-id');
            swal({
            title: "Are you sure?",
            text: "Kamu akan menghapus data dengan nama "+delete_nama+"",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                window.location="/pegawai/destroy/"+delete_id+""
                swal("Data Berhasil Dihapus", {
                icon: "success",
                });
            } else {
                swal("Your imaginary file is safe!");
            }
            });
        });
    </script>
@endsection