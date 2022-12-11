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
            <p class="card-title">Jumlah Kekerasan terhadap Perempuan dan Anak Menurut Jenis kelamin dan lokasi</p>
            <div class="overflow-auto">
                <table class="table table-hover table-bordered" id="dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tahun</th>
                            <th>Desa</th>
                            <th>Belum Sekolah</th>
                            <th>SD</th>
                            <th>SMP</th>
                            <th>SMA</th>
                            <th>SARJANA / DIPLOMA</th>
                            <th>Sumber</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $value=>$item)
                            <tr>
                                <td>{{$value+1}}</td>
                                <td>{{$item->tahun->nama_tahun}}</td>
                                <td>{{$item->desa->nama_desa}}</td>
                                <td>{{$item->bs}}</td>
                                <td>{{$item->sd}}</td>
                                <td>{{$item->smp}}</td>
                                <td>{{$item->sma}}</td>
                                <td>{{$item->pt}}</td>
                                <td>{{$item->sumber}}</td>
                                <td>{{$item->ket}}</td>
                                <td>
                                    <a href="{{ route('jumkerlok.destroy', $item->id) }}"
                                        class="btn btn-danger btn-sm rounded-circle"><i
                                            class="ri ri-delete-bin-line"></i></a>
                                    <a href="{{ route('jumkerlok.edit', $item->id) }}"
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
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('jumkerlok.store') }}" method="post" class="row" enctype="multipart/form-data">
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
                            <label for="bs" class="form-label">Belum Sekolah</label>
                            <input type="number" class="form-control" name="bs" id="bs" required>
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="sd" class="form-label">SD</label>
                            <input type="number" class="form-control" name="sd" id="sd" required>
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="smp" class="form-label">SMP</label>
                            <input type="number" class="form-control" name="smp" id="smp" required>
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="sma" class="form-label">SMA</label>
                            <input type="number" class="form-control" name="sma" id="sma" required>
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="pt" class="form-label">Pt/Sarjan/Diploma</label>
                            <input type="number" class="form-control" name="pt" id="pt" required>
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="sumber" class="form-label">Sumber</label>
                            <select class="form-select" name="sumber" id="sumber" aria-label="Default select example">
                                <option selected>Sumber</option>
                                <option Value="PPPA">PPPA</option>
                                <option Value="Kepolisian">Kepolisian</option>
                                <option value="Desa">Desa</option>
                                <option value="Data Lainya">Data Lainya</option>
                            </select>
                        </div>
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