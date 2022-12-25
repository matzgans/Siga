@extends('admin')

@section('content')
<div class="col-md-12 col-12 mb-2">
    <button type="button" class="btn btn-sm mb-3 btn-primary" data-bs-toggle="modal"
        data-bs-target="#staticBackdrop">
        <i class="bi bi-plus-lg"></i> Tambah Data
    </button>
    <a type="button" href="{{route('klasprespend.cetak')}}" class="btn btn-sm mb-3 btn-primary" >
        <i class="bi bi-plus-lg"></i> cetak
    </a>
    <div class="card">
        <div class="card-body">
            <p class="card-title">Data Jumlah Penduduk menurut Jenis Kelamin</p>
            <div class="overflow-auto">
                <table class="table table-hover table-bordered dataTable" id="dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tahun</th>
                            <th>Desa</th>
                            <th>Laki - Laki</th>
                            <th>Perempuan</th>
                            <th>Keterangan</th>
                            <th>Sumber</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($data as $value=>$item)
                            <tr>
                                <td>{{$value+1}}</td>
                                <td>{{$item->tahun->nama_tahun}}</td>
                                <td>{{$item->desa->nama_desa}}</td>
                                <td>{{$item->l}} orang</td>
                                <td>{{$item->p}} orang</td>
                                <td>{{$item->ket}}</td>
                                <td>{{$item->sumber}}</td>
                                <td>
                                    <a href="#"
                                        class="delete btn btn-danger text-white btn-sm rounded-circle" data-id="{{$item->id}}" data-name="{{$item->nama}}"><i
                                            class="ri ri-delete-bin-line"></i></a>
                                    <a href="{{ route('klasprespend.edit', $item->id) }}"
                                        class="btn btn-warning text-white btn-sm rounded-circle"><i
                                            class="ri ri-edit-box-fill"></i></a>
                                </td>
                            </tr>
                        @empty
                            <span>Data belum diimput</span>
                        @endforelse
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
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Data Klasifikasi Presentasi Penduduk</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('klasprespend.store') }}" method="post" class="row" enctype="multipart/form-data" required>
                        @csrf
                        
                        <div class="col-md-12 col-12 mb-2">
                            <label for="desa" class="form-label">Desa</label>
                            <select class="form-select" name="desa_id" id="desa_id" aria-label="Default select example" required>
                                <option selected>Pilih Desa</option>
                                @foreach ($desa as $item)    
                                    <option value="{{$item->id}}">{{$item->nama_desa}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="l" class="form-label">Laki - Laki</label>
                            <input type="number" class="form-control" name="l" id="l" required>
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="p" class="form-label">Perempuan</label>
                            <input type="number" class="form-control" name="p" id="p" required>
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="ket" class="form-label">Keterangan</label>
                            <input type="text" class="form-control" name="ket" id="ket" required>
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="sumber" class="form-label">Sumber</label>
                            <select class="form-select" name="sumber" id="sumber" aria-label="Default select example" required>
                                <option selected>Sumber</option>
                                <option value="Bps">Bps</option>
                                <option value="Desa">Desa</option>
                                <option value="Data Lainya">Data Lainya</option>
                            </select>
                        </div>
                        <div class="col-md-12 col-12 mb-2">
                            <label for="tahun" class="form-label">Tahun</label>
                            <select class="form-select" name="tahun_id" id="tahun_id" aria-label="Default select example" required>
                                <option selected>Pilih Tahun</option>
                                @foreach ($tahun as $item)    
                                    <option value="{{$item->id}}">{{$item->nama_tahun}}</option>
                                @endforeach
                            </select>
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
        text: "Kamu akan menghapus data",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
        if (willDelete) {
            window.location="/klasprespend/destroy/"+delete_id+""
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