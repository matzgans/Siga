@extends('admin')
@section('content')
<div class="col-md-12 col-12">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('penduduk.update',$data->id) }}" method="post" class="row" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6 col-12 mb-2">
                    <label for="nik" class="form-label">Nik</label>
                    <input type="number" class="form-control" name="nik" id="nik" value="{{$data->nik}}">
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" value="{{$data->nama}}">
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" value="{{$data->tempat_lahir}}">
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="{{Carbon\Carbon::parse($data->tanggal_lahir)->format('Y-m-d') }}">
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="jk" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" name="jk" id="jk" aria-label="Default select example">
                        @if($data->jk == 'l')
                        <option value="{{$data->jk}}"selected>Laki - Laki</option>
                        <option value="p">Perempuan</option>
                        @else
                        <option value="{{$data->jk}}"selected>Perempuan</option>
                        <option value="l">Laki - Laki</option>
                        @endif
                    </select>
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="klasifikasi_umur" class="form-label">Klasifikasi Umur</label>
                    <select class="form-select" name="klasifikasi_umur_id" id="klasifikasi_umur_id" aria-label="Default select example">
                        @foreach ($klasifikasi as $item)    
                            <option value="{{$item->id}}" {{$item->id == $data->klasifikasi_umur_id ? 'selected': ''}}>{{$item->umur}} | {{$item->kategori}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="umur" class="form-label">Umur</label>
                    <input type="number" class="form-control" name="umur" id="umur" value="{{$data->umur}}">
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="agama" class="form-label">Agama</label>
                    <select class="form-select" name="agama_id" id="agama_id" aria-label="Default select example">
                        @foreach ($agama as $item)    
                            <option value="{{$item->id}}" {{$item->id == $data->agama_id ? 'selected' : ''}}>{{$item->nama_agama}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="pekerjaan" class="form-label">Pekerjaan</label>
                    <select class="form-select" name="pekerjaan_id" id="pekerjaan_id" aria-label="Default select example">
                        @foreach ($pekerjaan as $item)    
                            <option value="{{ $item->id }}" {{ $item->id == $data->pekerjaan_id ? 'selected' : '' }}>{{ $item->nama_pekerjaan }}</option>
                            {{-- <option value="{{$item->id}}">{{$item->nama_pekerjaan}}</option> --}}
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 col-12 mb-2">
                    <label for="tahun" class="form-label">Tahun</label>
                    <select class="form-select" name="tahun_id" id="tahun_id" aria-label="Default select example">
                        <option selected>Pilih Tahun</option>
                        @foreach ($tahun as $item)    
                            <option value="{{$item->id}}" {{$item->id == $data->tahun_id ? 'selected': '' }}>{{$item->nama_tahun}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-12 col-12 mb-2">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea type="text" name="alamat" class="form-control" id="alamat">{{$data->alamat}}</textarea>
                </div>
                <div class="col-md-12 col-12 mb-2">
                    <img src="{{asset('foto_penduduk/'.$data->foto)}}" alt="" class="img-rounded" style="width:100px;"><br>
                    <label for="foto" class="form-label">Foto</label>
                    <input type="file" class="form-control" name="foto" id="foto" value="{{$data->foto}}">
                </div>
                <div class="col-md-12 col-12 mb-2">
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
    
@endsection