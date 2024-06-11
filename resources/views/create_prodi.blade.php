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
        <h1>FORM DATA PRODI</h1>
        <hr>
<form action="/prodi" method="POST">
@csrf
        <table>
            <tr>
                <th>
                    <label for="">ID</label>
                </th>
                <td>:</td>
                <td>
                    <input type="number" name="id">
                </td>
            </tr>
            <tr>
                <th>
                    <label for="">NAMA PRODI</label>
                </th>
                <td>:</td>
                <td>
                    <input type="text" name="nama_prodi">
                </td>
            </tr>
            <tr>
                <th>
                    <label for="">FAKULTAS</label>
                </th>
                <td>:</td>
                <td>
                    <input type="text" name="fakultas">
                </td>
            </tr>
            <tr>
                <th>
                    <label for="">KAPRODI</label>
                </th>
                <td>:</td>
                <td>
                    <input type="text" name="kaprodi">
                </td>
            </tr>
            <tr>
                <th>
                    <label for="">SEKPRODI</label>
                </th>
                <td>:</td>
                <td>
                    <input type="text" name="sekprodi">
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <button style="width:100%" type="submit">SIMPAN</button>
                </td>
            </tr>
        </table>
    </form>
    </center>
    
</body>
</html>