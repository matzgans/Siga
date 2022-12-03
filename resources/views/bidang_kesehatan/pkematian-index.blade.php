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
            <p class="card-title">Data Penyebab Kematian Ibu Hamil</p>
            <div class="overflow-auto">
                <table class="table table-hover table-sm dataTable" id="dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tahun</th>
                            <th>Desa</th>
                            <th>Partus Lama</th>
                            <th>Infeksi</th>
                            <th>Hipertensi</th>
                            <th>Pendarahan</th>
                            <th>Penyebab Lainya</th>
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
                            <td>{{$item->jum_partuslama}} KH</td>
                            <td>{{$item->jum_infeksi}} Orang</td>
                            <td>{{$item->jum_hirpetensi}} Orang</td>
                            <td>{{$item->jum_pendarahan}} Orang</td>
                            <td>{{$item->jum_penyebablain}} Orang</td>
                            <td>{{$item->ket}}</td>
                            <td>{{$item->sumber}}</td>
                            <td>
                                <a href="{{ route('pkematian.destroy', $item->id) }}"
                                    class="btn btn-danger btn-sm rounded-circle"><i
                                        class="ri ri-delete-bin-line"></i></a>
                                <a href="{{ route('pkematian.edit', $item->id) }}"
                                    class="btn btn-warning text-white btn-sm rounded-circle"><i
                                        class="ri-edit-box-fill"></i></a>
                            </td>
                        </tr>
                        @empty
                            Data belum di input
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
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Data Penyebab Kematian Ibu Hamil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('pkematian.store') }}" method="post" class="row" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="col-md-6 col-12 mb-2">
                            <label for="desa" class="form-label">Desa</label>
                            <select class="form-select" name="desa_id" id="desa_id" aria-label="Default select example">
                                <option selected>Pilih Desa</option>
                                @foreach ($desa as $item)    
                                    <option value="{{$item->id}}">{{$item->nama_desa}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="jum_partuslama" class="form-label">Jumlah Partuslama</label>
                            <input type="number" class="form-control" name="jum_partuslama" id="jum_partuslama">
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="jum_infeksi" class="form-label">Jumlah Infeksi</label>
                            <input type="number" class="form-control" name="jum_infeksi" id="jum_infeksi">
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="jum_hirpetensi" class="form-label">Jumlah Hipertensi</label>
                            <input type="number" class="form-control" name="jum_hirpetensi" id="jum_hirpetensi">
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="jum_pendarahan" class="form-label">Jumlah Pendarahan</label>
                            <input type="number" class="form-control" name="jum_pendarahan" id="jum_pendarahan">
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="jum_penyebablain" class="form-label">Jumlah Penyebab Lain</label>
                            <input type="number" class="form-control" name="jum_penyebablain" id="jum_penyebablain">
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