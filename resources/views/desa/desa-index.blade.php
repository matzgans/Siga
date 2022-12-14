@extends('admin')
@section('content')
    <div class="col-md-12 col-xs-12 col-12">

        <div class="card">
            <div class="card-body" style="overflow-y: auto">
                <p class="card-title">Data Desa</p>
                @if (Session('message'))
                    <div class="alert alert-success" role="alert">
                        {{ Session('message') }}
                    </div>
                @endif
                <button type="button" class="btn btn-sm btn-primary mb-3" data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop">
                    <i class="bi bi-plus-lg"></i> Data Desa
                </button>
                <div style="overflow-x: auto">
                    <table class="table table-sm table-hover dataTable" id="dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Desa</th>
                                <th>Kepala Desa</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $index => $item)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $item->nama_desa }}</td>
                                    <td>{{ $item->kepala_desa }}</td>
                                    <td>
                                        <a href="#"
                                            class="delete btn btn-danger text-white btn-sm rounded-circle" data-id="{{$item->id}}" data-name="{{$item->nama}}"><i
                                                class="ri ri-delete-bin-line"></i></a>
                                        <a href="{{ route('desa.edit', $item->id) }}"
                                            class="btn btn-sm btn-warning rounded-circle"><i
                                                class="ri ri-edit-box-line text-white"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>



    </div>
    {{-- <script>
        $(document).ready(function() {
            $('#dataTable').DataTable({
                responsive:true
            });
        });
    </script> --}}

    <!-- Vertically centered modal -->
    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Data Desa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('desa.store') }}" method="post" class="row">
                        @csrf
                        <div class="col-md-6 col-12 mb-2">
                            <label for="nama">Nama Desa</label>
                            <input type="text" class="form-control" name="nama_desa" id="nama_desa" required>
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="kepala_desa">Kepala Desa</label>
                            <input type="text" class="form-control" name="kepala_desa" id="kepala_desa" required>
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
            window.location="/desa/destroy/"+delete_id+""
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
