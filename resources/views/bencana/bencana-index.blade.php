@extends('admin')

@section('content')
    <div class="col-md-12 col-12 mb-2">
        <button type="button" class="btn btn-sm mb-3 btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            <i class="bi bi-plus-lg"></i> Tambah Data
        </button>
        <div class="card">
            <div class="card-body">
                <div class="overflow-auto">
                    <table class="table table-hover table-bordered" id="dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Bencana</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $value => $item)
                                <tr>
                                    <td>{{ $value + 1 }}</td>
                                    <td>{{ $item->nama_bencana }}</td>
                                    <td>
                                        <a href="#"
                                            class="delete btn btn-danger text-white btn-sm rounded-circle" data-id="{{$item->id}}" data-name="{{$item->nama_bencana}}"><i
                                                class="ri ri-delete-bin-line"></i></a>
                                        <a href="{{ route('bencana.edit', $item->id) }}"
                                            class="btn btn-warning text-white btn-sm rounded-circle"><i
                                                class="ri ri-edit-box-fill"></i></a>
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
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Data Bencana</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('bencana.store') }}" method="post" class="row" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12 col-12 mb-2">
                            <label for="nama_bencana" class="form-label">Nama Bencana</label>
                            <input type="text" name="nama_bencana" class="form-control" id="nama_bencana">
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
                window.location="/bencana/destroy/"+delete_id+""
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
