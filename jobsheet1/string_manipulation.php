<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulasi String</title>
</head>
<body>
    <?php
    //deklarasi variabel dengan tipe data string
    $string = " Selamat belajar Pemrograman Web II guys!!!";
    //mengubah string menjadi huruf kapital
    $huruf_kapital = strtoupper($string);
    //mengubah string menjadi huruf kecil
    $huruf_kecil = strtolower($string);
    //memotong string mulai dari karakter ke-16
    $memotong_string = substr($string, 16);

    //menampilkan hasil
    echo "String Asli :" . $string . "<br>";
    echo "Huruf Kapital :" . $huruf_kapital . "<br>";
    echo "Huruf Kecil :" . $huruf_kecil . "<br>";
    echo "Memotong String :" . $memotong_string . "<br>";
    ?>
</body>
</html>