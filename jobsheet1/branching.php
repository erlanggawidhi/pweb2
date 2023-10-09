<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Percabangan</title>
</head>
<body>
    <h1>Cek Bilangan Ganjil, Genap, atau Nol</h1>
    <h2>Masukkan Angka : </h2>

    <form method="post" action="">  <!--Formulir untuk input angka-->
        <input type="text" name="angka">    <!--Input untuk memasukkan angka-->
        <input type="submit" value="Cek">   <!--Tombol Submit untuk mengirim formulir inputan angka-->
    </form>

    <?php
    //memeriksa formulir yang telah di submit
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        //mengambil nilai inputan angka dari formulir
        $angka = $_POST["angka"];

        //memeriksa apakah inputan angka merupakan angka positif, negatif, atau nol
        if ($angka > 0){
            echo "Angka " . $angka . " adalah Bilangan Positif.";
        } else if ($angka < 0){
            echo "Angka " . $angka . " adalah Bilangan Negatif.";
        } else {
            echo "Angka " . $angka . " adalah Bilangan Nol.";
        }
    }
    ?>
</body>
</html>