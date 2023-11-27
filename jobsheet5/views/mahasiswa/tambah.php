<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid mt-3">
        <h3>Tambah Data Mahasiswa</h3>
        <form action="proses" method="post">
            <table class="table">
                <thead class="table-light">
                    <tr>
                        <td><b>NIM</b></td>
                        <td><input class="form-control" type="text" name="nim"></td>
                    </tr>
                    <tr>
                        <td><b>Nama</b></td>
                        <td><input class="form-control" type="text" name="nama"></td>
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
                    <td><b>Program Studi</b></td>
                                <td>
                                    <select name="program_studi" id="" class="form-control">
                                        <option value="Teknik Informatika">Teknik Informatika</option>
                                        <option value="Rekayasa Keamanan dan Siber">Rekayasa Keamanan dan Siber</option>
                                        <option value="Teknologi Rekayasa Multimedia">Teknologi Rekayasa Multimedia</option>
                                        <option value="Akuntansi Lembaga Keuangan Syariah">Akuntansi Lembaga Keuangan Syariah</option>
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