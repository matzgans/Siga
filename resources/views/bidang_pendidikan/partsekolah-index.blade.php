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
            <p class="card-title">Data Angka Partisipasi Sekolah</p>
            <div class="overflow-auto">
                <table class="table table-hover" id="dataTable">
                    <thead>
                        <tr>
                            <th rowspan="2">No</th>
                            <th rowspan="2">Tahun</th>
                            <th rowspan="2">Desa</th>
                            <th colspan="2">7-12</th>
                            <th colspan="2">13-15</th>
                            <th colspan="2">16-18</th>
                            <th colspan="2">19-24</th>
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
                                <td>{{$item->l7}}%</td>
                                <td>{{$item->p7}}%</td>
                                <td>{{$item->l13}}%</td>
                                <td>{{$item->p13}}%</td>
                                <td>{{$item->l16}}%</td>
                                <td>{{$item->p16}}%</td>
                                <td>{{$item->l19}}%</td>
                                <td>{{$item->p19}}%</td>
                                <td>{{$item->ket}}</td>
                                <td>{{$item->sumber}}</td>
                                <td>
                                    <a href="{{ route('partsekolah.destroy', $item->id) }}"
                                        class="btn btn-danger btn-sm rounded-circle"><i
                                            class="ri ri-delete-bin-line"></i></a>
                                    <a href="{{ route('partsekolah.edit', $item->id) }}"
                                        class="btn btn-warning btn-sm rounded-circle"><i
                                            class="ri ri-person-bin-line"></i>edit</a>
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
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Data Angka partisipasi sekolah</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('partsekolah.store') }}" method="post" class="row" enctype="multipart/form-data">
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
                            <label for="l7" class="form-label">L(7-12)</label>
                            <input type="number" name="l7" class="floatNumberField" value="0.00" placeholder="0.00" step="0.01" id="l7" required />
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="p7" class="form-label">P(7-12)</label>
                            <input type="number" name="p7" class="floatNumberField" value="0.00" placeholder="0.00" step="0.01" id="p7" required />
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="l13" class="form-label">L(13-15)</label>
                            <input type="number" name="l13" class="floatNumberField" value="0.00" placeholder="0.00" step="0.01" id="l13" required />
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="p13" class="form-label">P(13-15)</label>
                            <input type="number" name="p13" class="floatNumberField" value="0.00" placeholder="0.00" step="0.01" id="p13" required />
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="l16" class="form-label">L(16-18)</label>
                            <input type="number" name="l16" class="floatNumberField" value="0.00" placeholder="0.00" step="0.01" id="l16" required />
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="p16" class="form-label">P(16-18)</label>
                            <input type="number" name="p16" class="floatNumberField" value="0.00" placeholder="0.00" step="0.01" id="p16" required />
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="l19" class="form-label">L(19-14)</label>
                            <input type="number" name="l19" class="floatNumberField" value="0.00" placeholder="0.00" step="0.01" id="l19" required />
                        </div>
                        <div class="col-md-6 col-12 mb-2">
                            <label for="p19" class="form-label">P(19-14)</label>
                            <input type="number" name="p19" class="floatNumberField" value="0.00" placeholder="0.00" step="0.01" id="p19" required />
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
</script>

@endsection