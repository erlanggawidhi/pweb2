<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid mt-3">
        <h3>Tambah Data Dosen</h3>
        <form action="proses_dosen" method="post">
            <table class="table">
                <thead class="table-light">
                <tr>
                    <td><b>NIDN</b></td>
                    <td><input class="form-control" type="text" name="nidn"></td>
                </tr>
                <tr>
                    <td><b>Nama</b></td>
                    <td><input class="form-control" type="text" name="nama"></td>
                </tr>
                <tr>
                    <td><b>Tempat Lahir</b></td>
                    <td><input class="form-control" type="text" name="tempat_lahir"></td>
                </tr>
                <tr>
                    <td><b>Tanggal Lahir</b></td>
                    <td><input type="date" name="tanggal_lahir" value="<?php echo $d['tanggal_lahir'] ?>"></td>
                </tr>
                <tr>
                    <td><b>Jenis Kelamin</b></td>
                    <td>
                        <select name="jenis_kelamin" id="" class="form-control">
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        </td>
                </tr>
                <td><b>Agama</b></td>
                    <td>
                        <select name="agama" id="" class="form-control">
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Budha">Budha</option>
                            <option value="Hindu">Hindu</option>
                        </select>
                    </td>
                <tr>
                    <td><b>Alamat</b></td>
                    <td>
                        <textarea class="form-control" name="alamat" cols="100" rows="1"></textarea>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" class="btn btn-primary mt-3 mb-3q" name="submit" value="Simpan"></td>
                </tr>
            </thead>
        </table>
    </form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>