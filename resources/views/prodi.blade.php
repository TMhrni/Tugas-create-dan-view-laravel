<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>prodi</title>
</head>
<body>
    <center>
        <h1>DATA PRODI</h1>
     

        <table border="1" style="border-collapse: collapse;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAMA PRODI</th>
                    <th>FAKULTAS</th>
                    <th>KAPRODI</th>
                    <th>SEKPRODI</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($prodi as $prodis)
                    <tr>
                        <td>{{ $prodis->id}}</td>
                        <td>{{ $prodis->nama_prodi}}</td>
                        <td>{{ $prodis->fakultas}}</td>
                        <td>{{ $prodis->kaprodi}}</td>
                        <td>{{ $prodis->sekprodi}}</td>
                    </tr>
                @endforeach
            </tbody>

        </table>
        <a href="/prodi/create">Tambah Data Prodi</a>
        <form action="" method="get"></form>
    </center>
</body>
</html>