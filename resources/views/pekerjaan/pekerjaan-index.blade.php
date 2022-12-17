@extends('admin')
@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-body" style="overflow-y:auto">
                <p class="card-title">Data Pekerjaan</p>
                @if (Session('message'))
                    <div class="alert alert-success" role="alert">
                        {{ Session('message') }}
                    </div>
                @endif
                <button type="button" class="btn btn-sm mb-3 btn-primary" data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop">
                    <i class="bi bi-plus-lg"></i> Tambah Pekerjaan
                </button>
                <div style="overflow-x: auto">
                    <table class="table table-sm table-hover dataTable" id="dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pekerjaan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $index => $item)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $item->nama_pekerjaan }}</td>
                                    <td>
                                        <a href="{{ route('pekerjaan.destroy', $item->id) }}"
                                            class="btn btn-danger btn-sm rounded-circle"><i
                                                class="ri ri-delete-bin-line"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Vertically centered modal -->
        <!-- Button trigger modal -->


        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Tambah Pekerjaan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('pekerjaan.store') }}" method="post" class="row">
                            @csrf
                            <div class="col-md-6 col-12 mb-2">
                                <label for="nama">Nama Pekerjaan</label>
                                <input type="text" class="form-control" name="nama_pekerjaan" id="nama_pekerjaan">
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
