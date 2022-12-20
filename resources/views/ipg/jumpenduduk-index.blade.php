@extends('admin')

@section('content')
<div class="col-md-12 col-12 mb-2">
    <button type="button" class="btn btn-sm mb-3 btn-primary" data-bs-toggle="modal"
        data-bs-target="#staticBackdrop">
        <i class="bi bi-plus-lg"></i> Tambah Data
    </button>
    <a type="button" href="{{ route('prespenduduk.cetak') }}" class="btn btn-sm mb-3 btn-primary" >
        <i class="bi bi-plus-lg"></i> cetak
    </a>
    <div class="card">
        <div class="card-body">
            @if(Session('message'))
                <div class="alert alert-danger" role="alert">
                    {{Session('message')}}
                </div>
            @endif
            <p class="card-title">Data Jumlah Penduduk menurut Jenis Kelamin</p>
            <div class="overflow-auto">
                <table class="table table-hover table-bordered dataTable" id="dataTable">
                    <thead>
                        <tr>
                            <th rowspan="2">No</th>
                            <th rowspan="2">Tahun</th>
                            <th rowspan="2">Desa</th>
                            <th colspan="2">0-5</th>
                            <th colspan="2">6-12</th>
                            <th colspan="2">13-17</th>
                            <th colspan="2">18-50</th>
                            <th colspan="2">51 +</th>
                            <th rowspan="2">Keterangan</th>
                            <th rowspan="2">Sumber</th>
                            <th rowspan="2">Aksi</th>
                        </tr>
                        <tr>
                            <th>L</th>
                            <th>P</th>
                            <th>L</th>
                            <th>P</th>
                            <th>L</th>
                            <th>P</th>
                            <th>L </th>
                            <th>P</th>
                            <th>L</th>
                            <th>P</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $value=>$item)
                            <tr>
                                <td>{{$value+1}}</td>
                                <td>{{$item->tahun->nama_tahun}}</td>
                                <td>{{$item->desa->nama_desa}}</td>
                                <td>{{$item->l0}}</td>
                                <td>{{$item->p0}}</td>
                                <td>{{$item->l6}}</td>
                                <td>{{$item->p6}}</td>
                                <td>{{$item->l13}}</td>
                                <td>{{$item->p13}}</td>
                                <td>{{$item->l18}}</td>
                                <td>{{$item->p18}}</td>
                                <td>{{$item->l51}}</td>
                                <td>{{$item->p51}}</td>
                                <td>{{$item->ket}}</td>
                                <td>{{$item->sumber}}</td>
                                <td>
                                    <a href="{{ route('prespenduduk.destroy', $item->id) }}"
                                        class="btn btn-danger btn-sm rounded-circle"><i
                                            class="ri ri-delete-bin-line"></i></a>
                                    <a href="{{ route('prespenduduk.edit', $item->id) }}"
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
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Data Jumlah Penduduk menurut Jenis Kelamin</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('prespenduduk.store') }}" method="post" class="row" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="col-md-12 col-12 mb-2">
                            <label for="desa" class="form-label">Desa</label>
                            <select class="form-select" name="desa_id" id="desa_id" aria-label="Default select example">
                                <option selected>Pilih Desa</option>
                                @foreach ($desa as $item)    
                                    <option value="{{$item->id}}">{{$item->nama_desa}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="l0" class="form-label">L (0 - 5)</label>
                            <input type="number" class="form-control" name="l0" id="l0" required>
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="p0" class="form-label">P (0 - 5)</label>
                            <input type="number" class="form-control" name="p0" id="p0" required>
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="l6" class="form-label">L (6 - 12)</label>
                            <input type="number" class="form-control" name="l6" id="l6" required>
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="p6" class="form-label">P (6 - 12)</label>
                            <input type="number" class="form-control" name="p6" id="p6" required>
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="l13" class="form-label">L (13 - 17)</label>
                            <input type="number" class="form-control" name="l13" id="l13" required>
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="p13" class="form-label">P (13 - 17)</label>
                            <input type="number" class="form-control" name="p13" id="p13" required>
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="l18" class="form-label">L (18 - 50)</label>
                            <input type="number" class="form-control" name="l18" id="l18" required>
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="p18" class="form-label">P (18 - 50)</label>
                            <input type="number" class="form-control" name="p18" id="p18" required>
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="l51" class="form-label">L (51 +)</label>
                            <input type="number" class="form-control" name="l51" id="l51" required>
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="p51" class="form-label">P (51 +)</label>
                            <input type="number" class="form-control" name="p51" id="p51" required>
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="ket" class="form-label">Keterangan</label>
                            <input type="text" class="form-control" name="ket" id="ket">
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="sumber" class="form-label">Sumber</label>
                            <input type="text" class="form-control" name="sumber" id="sumber">
                        </div>
                        <div class="col-md-12 col-12 mb-2">
                            <label for="tahun" class="form-label">Tahun</label>
                            <select class="form-select" name="tahun_id" id="tahun_id" aria-label="Default select example">
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
@section('scripta')
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>
@endsection