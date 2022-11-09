@extends('admin')
@section('content')
    <div class="col-md-12 col-xs-12 col-12">

        <div class="card">
            <div class="card-body">
                <button type="button" class="btn btn-sm btn-primary mb-3" data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop">
                    <i class="bi bi-plus-lg"></i> Data Desa
                </button>
                <div style="overflow-x: auto">
                    <table class="table table-hover" id="dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Desa</th>
                                <th>Kepala Desa</th>
                                <th>Email</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $index => $item)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $item->nama_desa }}</td>
                                    <td>{{ $item->kepala_desa }}</td>
                                    <td>{{ $item->user->email }}</td>
                                    <td>
                                        <a href="{{ route('desa.destroy', $item->id) }}"
                                            class="btn btn-sm btn-danger rounded-circle"><i
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
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable({
                responsive:true
            });
        });
    </script>

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
                            <input type="text" class="form-control" name="nama_desa" id="nama_desa">
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="kepala_desa">Kepala Desa</label>
                            <input type="text" class="form-control" name="kepala_desa" id="kepala_desa">
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
