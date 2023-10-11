<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php
    // Memanggil class database
    include '../classes/database.php';
    // Instansiasi database
    $db = new database;
    ?>
<div class = "px-3 py-4">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SIAKAD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Dosen</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

    <div class="container-fluid mt-3">
        <h3>Data Mahasiswa</h3>
        <a type="button" class="btn btn-primary mb-3 mt-3" href="input_mhs.php">Tambah Mahasiswa</a>

        <?php
        if (isset($_GET['pesan'])) {
            $pesan = $_GET['pesan'];
            $alertClass = '';
            $alertText = '';

            if ($pesan == "Data telah dihapus") {
                $alertClass = 'alert-danger';
                $alertText = 'Data berhasil dihapus!';
            } elseif ($pesan == "Data telah ditambah") {
                $alertClass = 'alert-success';
                $alertText = 'Data berhasil ditambah!';
            } elseif ($pesan == "Data telah diedit") {
                $alertClass = 'alert-warning';
                $alertText = 'Data berhasil diedit!';
            }

            if (!empty($alertClass) && !empty($alertText)) {
                echo '<div class="alert ' . $alertClass . ' alert-dismissible">
                        ' . $alertText . '
                        <a href="tampil_mhs.php" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></a>
                      </div>';
            }
        }
        ?>
        
        <table class="table">
            <thead class="table-light">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($db->tampil_mahasiswa() as $x) {
                ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $x['nim'] ?></td>
                        <td><?php echo $x['nama'] ?></td>
                        <td><?php echo $x['alamat'] ?></td>
                        <td>
                            <a type="button" class="btn btn-warning" href="edit_mhs.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit</a>
                            <a type="button" class="btn btn-danger" href="proses_mhs.php?id=<?php echo $x['id']; ?>&aksi=hapus">Hapus</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</div>
</body>

</html>
