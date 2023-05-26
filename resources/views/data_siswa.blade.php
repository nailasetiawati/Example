<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>nama</td>
            <td>nis</td>
            <td>kelas</td>
            <td>aksi</td>
        </tr>

        @foreach($data as $data)
            <tr>
                <td>{{ $data->nama}}</td>
                <td>{{ $data->nis}}</td>
                <td>{{ $data->kelas}}</td>
                <td><a href="/hapus_data/{{$data->id}}">hapus</a>
                <a href="/edit_data/{{ $data->id }}">edit</a>
            </td>
            </tr>
            
        @endforeach
    </table>
</body>
</html>