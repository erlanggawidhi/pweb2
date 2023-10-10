<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php
    // Memanggil class database
    include '../classes/database.php';
    // Instansiasi database
    $db = new database;
    ?>

    <div class="container mt-5">
        <h3>Data Dosen</h3>
        <a type="button" class="btn btn-primary mb-3" href="input_dsn.php">Tambah Dosen</a>
        <table class="table">
            <thead class="table-light">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">NIDN</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($db->tampil_dosen() as $x) {
                ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $x['nidn'] ?></td>
                        <td><?php echo $x['nama'] ?></td>
                        <td><?php echo $x['alamat'] ?></td>
                        <td>
                            <a type="button" class="btn btn-warning" href="edit_dsn.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit</a>
                            <a type="button" class="btn btn-danger" href="proses_dsn.php?id=<?php echo $x['id']; ?>&aksi=hapus">Hapus</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>