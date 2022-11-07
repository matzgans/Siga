<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pdf Penduduk</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Nik</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($perempuan as $item)
            <tr>
                <td>{{$item->nama}}</td>
                <td>{{$item->nik}}</td>
            </tr>
            @endforeach
        </tbody>

    </table>
</body>
</html>