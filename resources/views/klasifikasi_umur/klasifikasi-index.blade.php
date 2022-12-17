@extends('admin')
@section('content')
<div class="col-md-12 col-xxs-12 col-12">

    <div class="card">
        <div class="card-body" style="overflow-y: auto">
            <p class="card-title">Data Klasifikasi Umur</p>
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
                <table class="table table-hover table-sm dataTable" id="dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Umur</th>
                            <th>Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $index=>$item)
                            <tr>
                                <td>{{$index+1}}</td>
                                <td>{{$item->umur}}</td>
                                <td>{{$item->kategori}}</td>
                                <td>
                                    <a href="{{ route('klasifikasiumur.destroy', $item->id) }}"
                                        class="btn btn-sm btn-danger rounded-circle"><i
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
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Klasifikasi Umur</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('klasifikasiumur.store') }}" method="post" class="row">
                        @csrf
                        <div class="col-md-6 col-12 mb-2">
                            <label for="umur">Umur</label>
                            <input type="text" class="form-control" name="umur" id="umuR">
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="kategori">Kategori</label>
                            <input type="text" class="form-control" name="kategori" id="kategori">
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
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable({
            responsive:true
        });
    });
</script>

@endsection
