<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Penduduk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    
</head>
<body>
    <h1>Ini Edit Desa</h1>
    <form action="{{route('desa.update',$data->id)}}" method="POST" class="row">
        @csrf
        <div class="col-md-6 col-12 mb-2">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" >
        </div>
        <div class="col-md-6 col-12 mb-2">
            <label for="kepala_desa">Kepala Desa</label>
            <input type="text" name="kepala_desa" id="kepala_desa" desa>
        </div>
        <button type="submit" class="btn btn-warning">Update</button>
    </form>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>