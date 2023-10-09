<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi</title>
</head>
<body>
    
    <form method="post" action="">
        <h2>Menghitung Luas Persegi Panjang</h2>
        Panjang Persegi Panjang : <input type="number" name="panjang">
        Lebar Persegi Panjang : <input type="number" name="lebar">

        <h2>Menghitung Luas Lingkaran</h2>
        Jari-jari Lingkaran : <input type="number" name="r"><br></br>
        <input type="submit" value="Hitung">
    </form>
    <?php
        // Fungsi untuk menghitung luas persegi panjang
        function Luas_persegipanjang($p, $l) {
            $luas = $p * $l;
            return $luas;
        }

            // Memeriksa apakah formulir telah disubmit
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Mengambil nilai panjang dan lebar dari formulir
            $p = $_POST["panjang"];
            $l = $_POST["lebar"];
            
            // Memanggil fungsi hitungLuasPersegiPanjang dengan nilai panjang dan lebar yang dimasukkan
            $luasPersegi = Luas_persegipanjang($p, $l);

            // Menampilkan hasilnya ke layar
            echo "Luas Persegi Panjang dengan Panjang $p cm dan Lebar $l cm adalah : " . $luasPersegi . " cm2<br>";
        }

        //fungsi untuk menghitung luas lingkaran
        function luas_lingkaran ($r){
            $luas = 3.14 * $r * $r;
            return $luas;
        }
            // Memeriksa apakah formulir telah disubmit
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Mengambil nilai jari-jari dari formulir
            $r = $_POST["r"];
                    
            // Memanggil fungsi hitungLuasLingkaran dengan nilai jari-jari yang dimasukkan
            $luasLingkaran = luas_lingkaran($r);
            
            // Menampilkan hasilnya ke layar
            echo "Luas Lingkaran dengan Jari-Jari $r cm adalah : " . $luasLingkaran . " cm2<br>";
            }
    ?>
</body>
</html>