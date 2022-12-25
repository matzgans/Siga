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
            <p class="card-title">Data Angka Putus Sekolah</p>
            <div class="overflow-auto">
                <table class="table table-hover table-bordered" id="dataTable">
                    <thead>
                        <tr>
                            <th rowspan="2">No</th>
                            <th rowspan="2">Tahun</th>
                            <th rowspan="2">Desa</th>
                            <th colspan="2">SD</th>
                            <th colspan="2">SMP</th>
                            <th colspan="2">SMA</th>
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
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $value=>$item)
                            <tr>
                                <td>{{$value+1}}</td>
                                <td>{{$item->tahun->nama_tahun}}</td>
                                <td>{{$item->desa->nama_desa}}</td>
                                <td>{{$item->lsd}} %</td>
                                <td>{{$item->psd}} %</td>
                                <td>{{$item->lsmp}} %</td>
                                <td>{{$item->psmp}} %</td>
                                <td>{{$item->lsma}} %</td>
                                <td>{{$item->psma}} %</td>
                                <td>{{$item->ket}}</td>
                                <td>{{$item->sumber}}</td>
                                <td>
                                    <a href="#"
                                        class="delete btn btn-danger text-white btn-sm rounded-circle" data-id="{{$item->id}}" data-name="{{$item->nama}}"><i
                                            class="ri ri-delete-bin-line"></i></a>
                                    <a href="{{ route('ptssekolah.edit', $item->id) }}"
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
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Data Angka Putus sekolah</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('ptssekolah.store') }}" method="post" class="row" enctype="multipart/form-data">
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
                            <label for="lsd" class="form-label">L(SD)</label>
                            <input type="number" name="lsd" class="floatNumberField form-control" value="0.00" placeholder="0.00" step="0.01" id="lsd" required />
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="psd" class="form-label">P(SD)</label>
                            <input type="number" name="psd" class="floatNumberField form-control" value="0.00" placeholder="0.00" step="0.01" id="psd" required />
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="lsmp" class="form-label">L(SMP)</label>
                            <input type="number" name="lsmp" class="floatNumberField form-control" value="0.00" placeholder="0.00" step="0.01" id="lsmp" required />
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="psmp" class="form-label">P(SMP)</label>
                            <input type="number" name="psmp" class="floatNumberField form-control" value="0.00" placeholder="0.00" step="0.01" id="psmp" required />
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="lsma" class="form-label">L(SMA)</label>
                            <input type="number" name="lsma" class="floatNumberField form-control" value="0.00" placeholder="0.00" step="0.01" id="lsma" required />
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="psma" class="form-label">P(SMA)</label>
                            <input type="number" name="psma" class="floatNumberField form-control" value="0.00" placeholder="0.00" step="0.01" id="psma" required />
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="ket" class="form-label">Keterangan</label>
                            <input type="text" class="form-control" name="ket" id="ket">
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="sumber" class="form-label">Sumber</label>
                            <select class="form-select" name="sumber" id="sumber" aria-label="Default select example">
                                <option selected>Sumber</option>
                                <option Value="Dinas Kesahatan">Dinas Pendidikan</option>
                                <option Value="Puskesmas">Bps</option>
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
            window.location="/ptssekolah/destroy/"+delete_id+""
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