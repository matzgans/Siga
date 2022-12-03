@extends('admin')
@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-body" style="overflow-y: auto">
                <button type="button" class="btn btn-sm btn-primary mb-3" data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop">
                    <i class="bi bi-plus-lg"></i> Data Opd
                </button>
                <div style="overflow-x: auto">
                    <table class="table table-sm table-hover dataTable" id="dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Istansi</th>
                                <th>Kepala Istansi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $index => $item)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $item->nama_istansi }}</td>
                                    <td>{{ $item->kepala_istansi }}</td>
                                    <td>
                                        <a href="{{ route('opd.destroy', $item->id) }}" class="btn btn-danger">Hapus</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                $('#dataTable').DataTable({
                    resposive:true
                });
            });
        </script>


        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('opd.store') }}" method="post" class="row">
                            @csrf
                            <div class="col-md-6 col-12 mb-2">
                                <label for="nama">Nama Istansi</label>
                                <input type="text" class="form-control" name="nama_istansi" id="nama_istansi" required>
                            </div>
                            <div class="col-md-6 col-12 mb-2">
                                <label for="nama">Kepala Istansi</label>
                                <input type="text" class="form-control" name="kepala_istansi" id="kepala_istansi" required>
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
