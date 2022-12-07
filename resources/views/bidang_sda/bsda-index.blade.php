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
            <p class="card-title">Data Korban Bencana</p>
            <div class="overflow-auto">
                <table class="table table-hover table-bordered" id="dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tahun</th>
                            <th>Jenis Bencana</th>
                            <th>Laki - Laki Dewasa </th>
                            <th>Perempuan Dewasa</th>
                            <th>Laki - Laki Anak</th>
                            <th>Perempuan Anak</th>
                            <th>Sumber</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $value=>$item)
                            <tr>
                                <td>{{$value+1}}</td>
                                <td>{{$item->tahun->nama_tahun}}</td>
                                <td>{{$item->bencana->nama_bencana}}</td>
                                <td>{{$item->ldes}} Orang</td>
                                <td>{{$item->pdes}} Orang</td>
                                <td>{{$item->lan}} Orang</td>
                                <td>{{$item->pan}} Orang</td>
                                <td>{{$item->sumber}}</td>
                                <td>{{$item->ket}}</td>
                                <td>
                                    <a href="{{ route('bsda.destroy', $item->id) }}"
                                        class="btn btn-danger btn-sm rounded-circle"><i
                                            class="ri ri-delete-bin-line"></i></a>
                                    <a href="{{ route('bsda.edit', $item->id) }}"
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
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Korban Bencana</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('bsda.store') }}" method="post" class="row" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-6 col-12 mb-2">
                            <label for="tahun" class="form-label">Tahun</label>
                            <select class="form-select" name="tahun_id" id="tahun_id" aria-label="Default select example">
                                <option selected>Pilih Tahun</option>
                                @foreach ($tahun as $item)    
                                    <option value="{{$item->id}}">{{$item->nama_tahun}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="bencana_id" class="form-label">Jenis Bencana</label>
                            <select class="form-select" name="bencana_id" id="bencana_id" aria-label="Default select example">
                                <option selected>Sumber</option>
                                @foreach ($bencana as $item)    
                                    <option value="{{$item->id}}">{{$item->nama_bencana}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="ldes" class="form-label">L (Dewasa)</label>
                            <input type="number" class="form-control" name="ldes" id="ldes">
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="pdes" class="form-label">P (Dewasa)</label>
                            <input type="number" class="form-control" name="pdes" id="pdes">
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="lan" class="form-label">L (Anak - Anak)</label>
                            <input type="number" class="form-control" name="lan" id="lan">
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="pan" class="form-label">P (Anak - Anak)</label>
                            <input type="number" class="form-control" name="pan" id="pan">
                        </div>
                        <div class="col-md-12 col-12 mb-2">
                            <label for="sumber" class="form-label">Sumber</label>
                            <select class="form-select" name="sumber" id="sumber" aria-label="Default select example">
                                <option selected>Sumber</option>
                                <option Value="Bpbd">Bpbd</option>
                                <option Value="Basarnas">Basarnas</option>
                                <option value="Data Lainya">Data Lainya</option>
                            </select>
                        </div>
                        <div class="col-md-12 col-12 mb-2">
                            <label for="ket" class="form-label">Keterangan</label>
                            <textarea name="ket" class="form-control" id="ket"></textarea>
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
</script>
@endsection