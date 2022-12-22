@extends('admin')
@section('content')
<div class="col-md-12 col-xxs-12 col-12">

    <div class="card">
        <div class="card-body" style="overflow-y: auto">
            <button type="button" class="btn btn-sm btn-primary mb-3" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop">
                <i class="bi bi-plus-lg"></i> Data Jabatan
            </button>
            <div style="overflow-x: auto">
                <table class="table table-hover table-sm dataTable" id="dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Status Jabatan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $value=>$item)
                            <tr>
                                <td>{{$value+1}}</td>
                                <td>{{$item->status_jabatan}}</td>
                                <td>
                                    <a href="{{ route('jabatan.edit', $item->id) }}"
                                        class="btn btn-sm btn-warning rounded-circle"><i
                                            class="ri ri-edit-box-line text-white"></i></a>
                                    <a href="#"
                                        class="delete btn btn-danger text-white btn-sm rounded-circle" data-id="{{$item->id}}" data-name="{{$item->status_jabatan}}"><i
                                            class="ri ri-delete-bin-line"></i></a>
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
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Jabatan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('jabatan.store') }}" method="post" class="row">
                        @csrf
                        <div class="col-md-12 col-12 mb-2">
                            <label for="status_jabatan">Status Jabatan</label>
                            <input type="text" class="form-control" name="status_jabatan" id="status_jabatan">
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
</div>

@endsection
@section('scripts')
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable({
            responsive: true
        });
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
            window.location="/jabatan/destroy/"+delete_id+""
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
