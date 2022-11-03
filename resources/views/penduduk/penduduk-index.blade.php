@extends('admin')
@section('content')
    <div class="col-md-12 col-12 mb-2">
        <button type="button" class="btn btn-sm mb-3 btn-primary" data-bs-toggle="modal"
            data-bs-target="#staticBackdrop">
            <i class="bi bi-plus-lg"></i> Tambah Penduduk
        </button>
        <div class="card">
            <div class="card-body">
                <p class="card-title">Laki - Laki</p>
                <table class="table table-hover" id="dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nik</th>
                            <th>Nama</th>
                            <th>Umur</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($penduduk_laki as $index=>$item)
                            <tr>
                                <td>{{$index+1}}</td>
                                <td>{{$item->nik}}</td>
                                <td>{{$item->nama}}</td>
                                <td>{{$item->umur}}</td>
                                <td>
                                    <a href="{{ route('penduduk.destroy', $item->id) }}"
                                        class="btn btn-danger btn-sm rounded-circle"><i
                                            class="ri ri-delete-bin-line"></i></a>
                                    <a href="{{ route('penduduk.edit', $item->id) }}"
                                        class="btn btn-warning btn-sm rounded-circle"><i
                                            class="ri ri-person-bin-line"></i>edit</a>
                                    <a href="{{ route('penduduk.show', $item->id) }}"
                                        class="btn btn-primary btn-sm rounded-circle"><i
                                            class="ri ri-person-bin-line"></i>Show</a>
                                </td>
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-12 mb-2">
        <div class="card">
            <div class="card-body">
                <p class="card-title">Perempuan</p>
                
                <table class="table table-hover" id="dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nik</th>
                            <th>Nama</th>
                            <th>Umur</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($penduduk_perempuan as $index=>$item)
                            <tr>
                                <td>{{$index+1}}</td>
                                <td>{{$item->nik}}</td>
                                <td>{{$item->nama}}</td>
                                <td>{{$item->umur}}</td>
                                <td>
                                    <a href="{{ route('penduduk.destroy', $item->id) }}"
                                        class="btn btn-danger btn-sm rounded-circle"><i
                                            class="ri ri-delete-bin-line"></i></a>
                                    <a href="{{ route('penduduk.edit', $item->id) }}"
                                        class="btn btn-warning btn-sm rounded-circle"><i
                                            class="ri ri-person-bin-line"></i>edit</a>
                                    <a href="{{ route('penduduk.show', $item->id) }}"
                                        class="btn btn-primary btn-sm rounded-circle"><i
                                            class="ri ri-person-bin-line"></i>Show</a>
                                </td>
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-12 mb-2">
        <div class="card">
            <div class="card-body">
                <p class="card-title">Penduduk</p>
                
                <table class="table table-hover" id="dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nik</th>
                            <th>Nama</th>
                            <th>Umur</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($penduduk as $index=>$item)
                            <tr>
                                <td>{{$index+1}}</td>
                                <td>{{$item->nik}}</td>
                                <td>{{$item->nama}}</td>
                                <td>{{$item->umur}}</td>
                                <td>
                                    <a href="{{ route('penduduk.destroy', $item->id) }}"
                                        class="btn btn-danger btn-sm rounded-circle"><i
                                            class="ri ri-delete-bin-line"></i></a>
                                    <a href="{{ route('penduduk.edit', $item->id) }}"
                                        class="btn btn-warning btn-sm rounded-circle"><i
                                            class="ri ri-person-bin-line"></i>edit</a>
                                    <a href="{{ route('penduduk.show', $item->id) }}"
                                        class="btn btn-primary btn-sm rounded-circle"><i
                                            class="ri ri-person-bin-line"></i>Show</a>
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
                $('#dataTable').DataTable();
            });
        </script>
        <!-- Vertically centered modal -->
        <!-- Button trigger modal -->


        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Tambah Data Penduduk</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('penduduk.store') }}" method="post" class="row" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-6 col-12 mb-2">
                                <label for="nik" class="form-label">Nik</label>
                                <input type="number" class="form-control" name="nik" id="nik">
                            </div>
                            <div class="col-md-6 col-12 mb-2">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama">
                            </div>
                            <div class="col-md-6 col-12 mb-2">
                                <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir">
                            </div>
                            <div class="col-md-6 col-12 mb-2">
                                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir">
                            </div>
                            <div class="col-md-6 col-12 mb-2">
                                <label for="jk" class="form-label">Jenis Kelamin</label>
                                <select class="form-select" name="jk" id="jk" aria-label="Default select example">
                                    <option deselected>Pilih Jenis Kelamin</option>
                                    <option value="l">Laki - Laki</option>
                                    <option value="p">Perempuan</option>
                                </select>
                            </div>
                            <div class="col-md-6 col-12 mb-2">
                                <label for="klasifikasi_umur" class="form-label">Klasifikasi Umur</label>
                                <select class="form-select" name="klasifikasi_umur_id" id="klasifikasi_umur_id" aria-label="Default select example">
                                    <option selected>Pilih Klasifikasi Umur</option>
                                    @foreach ($klasifikasi as $item)    
                                        <option value="{{$item->id}}">{{$item->umur}} | {{$item->kategori}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 col-12 mb-2">
                                <label for="umur" class="form-label">Umur</label>
                                <input type="number" class="form-control" name="umur" id="umur">
                            </div>
                            <div class="col-md-6 col-12 mb-2">
                                <label for="agama" class="form-label">Agama</label>
                                <select class="form-select" name="agama_id" id="agama_id" aria-label="Default select example">
                                    <option selected>Pilih Agama</option>
                                    @foreach ($agama as $item)    
                                        <option value="{{$item->id}}">{{$item->nama_agama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 col-12 mb-2">
                                <label for="pekerjaan" class="form-label">Pekerjaan</label>
                                <select class="form-select" name="pekerjaan_id" id="pekerjaan_id" aria-label="Default select example">
                                    <option selected>Pilih Pekerjaan</option>
                                    @foreach ($pekerjaan as $item)    
                                        <option value="{{$item->id}}">{{$item->nama_pekerjaan}}</option>
                                    @endforeach
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
                            <div class="col-md-12 col-12 mb-2">
                                <label for="alamat" class="form-label">Alamat</label>
                                <textarea name="alamat" class="form-control" id="alamat"></textarea>
                            </div>
                            <div class="col-md-12 col-12 mb-2">
                                <label for="foto" class="form-label">Foto</label>
                                <input type="file" class="form-control" name="foto" id="foto">
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
