@extends('admin')

@section('content')
<div class="col-md-12 col-12 mb-2">
    <button type="button" class="btn btn-sm mb-3 btn-primary" data-bs-toggle="modal"
        data-bs-target="#staticBackdrop">
        <i class="bi bi-plus-lg"></i> Tambah Data
    </button>
    <a type="button" href="" class="btn btn-sm mb-3 btn-primary" >
        <i class="bi bi-plus-lg"></i> cetak
    </a>
    <div class="card">
        <div class="card-body">
            @if(Session('message'))
                <div class="alert alert-danger" role="alert">
                    {{Session('message')}}
                </div>
            @endif
            <p class="card-title">Data Presentase Pendidikan Terakhir</p>
            <div class="overflow-auto">
                <table class="table table-hover table-bordered" id="dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tahun</th>
                            <th>Desa</th>
                            <th>L (Belum Sekolah)</th>
                            <th>P (Belum Sekolah)</th>
                            <th>L (SD)</th>
                            <th>P (SD)</th>
                            <th>L (SMP)</th>
                            <th>P (SMP)</th>
                            <th>L (SMA)</th>
                            <th>P (SMA)</th>
                            <th>L (PT)</th>
                            <th>P (PT)</th>
                            <th>Keterangan</th>
                            <th>Sumber</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $value=>$item)
                            <tr>
                                <td>{{$value+1}}</td>
                                <td>{{$item->tahun->nama_tahun}}</td>
                                <td>{{$item->desa->nama_desa}}</td>
                                <td>{{$item->lb}}</td>
                                <td>{{$item->pb}}</td>
                                <td>{{$item->lsd}}</td>
                                <td>{{$item->psd}}</td>
                                <td>{{$item->lsmp}}</td>
                                <td>{{$item->psmp}}</td>
                                <td>{{$item->lsma}}</td>
                                <td>{{$item->psma}}</td>
                                <td>{{$item->lpt}}</td>
                                <td>{{$item->ppt}}</td>
                                <td>{{$item->ket}}</td>
                                <td>{{$item->sumber}}</td>
                                <td>
                                    <a href="#"
                                        class="delete btn btn-danger text-white btn-sm rounded-circle" data-id="{{$item->id}}" data-name="{{$item->nama}}"><i
                                            class="ri ri-delete-bin-line"></i></a>
                                    <a href="{{ route('prespendidikan.edit', $item->id) }}"
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
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Presentase Pendidikan Terakhir</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('prespendidikan.store') }}" method="post" class="row" enctype="multipart/form-data">
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
                            <label for="lb" class="form-label">L(Tdk / Belum Sekolah)</label>
                            <input type="number" name="lb" class="floatNumberField" value="0.00" placeholder="0.00" step="0.01" id="lb" required />
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="pb" class="form-label">P(Tdk / Belum Sekolah)</label>
                            <input type="number" name="pb" class="floatNumberField" value="0.00" placeholder="0.00" step="0.01" id="pb" required />
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="lsd" class="form-label">L(Tdk / Belum Tamat SD)</label>
                            <input type="number" name="lsd" class="floatNumberField" value="0.00" placeholder="0.00" step="0.01" id="lsd" required />
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="psd" class="form-label">P(Tdk / Belum Tamat SD)</label>
                            <input type="number" name="psd" class="floatNumberField" value="0.00" placeholder="0.00" step="0.01" id="psd" required />
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="lsmp" class="form-label">P(SMP)</label>
                            <input type="number" name="lsmp" class="floatNumberField" value="0.00" placeholder="0.00" step="0.01" id="lsmp" required />
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="psmp" class="form-label">P(SMP)</label>
                            <input type="number" name="psmp" class="floatNumberField" value="0.00" placeholder="0.00" step="0.01" id="psmp" required />
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="lsma" class="form-label">L(SMA)</label>
                            <input type="number" name="lsma" class="floatNumberField" value="0.00" placeholder="0.00" step="0.01" id="lsma" required />
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="psma" class="form-label">P(SMA)</label>
                            <input type="number" name="psma" class="floatNumberField" value="0.00" placeholder="0.00" step="0.01" id="psma" required />
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="lpt" class="form-label">P(Perguruan Tinggi)</label>
                            <input type="number" name="lpt" class="floatNumberField" value="0.00" placeholder="0.00" step="0.01" id="lpt" required />
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="ppt" class="form-label">P(Perguruan Tinggi)</label>
                            <input type="number" name="ppt" class="floatNumberField" value="0.00" placeholder="0.00" step="0.01" id="ppt" required />
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="ket" class="form-label">Keterangan</label>
                            <input type="text" class="form-control" name="ket" id="ket">
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
@section('scripts')
<script>
        $(document).ready(function () {
            $(".floatNumberField").change(function() {
                $(this).val(parseFloat($(this).val()).toFixed(2));
            });
        });

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
            window.location="/prespendidikan/destroy/"+delete_id+""
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