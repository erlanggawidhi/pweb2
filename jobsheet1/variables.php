<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variabel dan Tipe Data</title>
</head>
<body>
    <?php
    //deklarasi variabel dengan tipe data berbeda
    $umur = 25; //tipe data : interger
    $nama = "erlangga"; //tipe data : string
    $sudah_menikah = false; //tipe data : boolean

    //menampilkan nilai variabel
    echo "Umur : " . $umur . "<br>";
    echo "Nama : " . $nama . "<br>";
    echo "Sudah Menikah ? : " . ($sudah_menikah ? 'Sudah' : 'Belum') . "<br>";
    ?>
</body>
</html>