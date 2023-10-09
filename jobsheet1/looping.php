<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perulangan</title>
</head>
<body>
    <?php
    //bilangan genap menggunakan struktur perulangan for
    echo "Perulangan FOR untuk Bilangan Genap dari 1 hingga 10 : <br>";
    for ($x = 2; $x <= 10; $x += 2) //memberikan nilai awal 2, lalu ditambah 2 secara terus menerus sampai batas yang sudah ditentukan
        echo "$x <br>";
    
    //bilangan ganjil menggunakan struktur perulangan while
    echo "<br> Perulangan WHILE untuk Bilangan Ganjil dari 1 hingga 10 : <br>";
    $y = 1; //memberikan nilai awal 1
    while ($y <= 10){   //memberi batas nilai
        echo "$y <br>";
        $y += 2;    //nilai awal selalu ditambah 2
    }

    //bilangan prima menggunakan struktur perulangan do while
    echo "<br> Perulangan DO WHILE untuk Bilangan Prima kurang dari 20 : <br>";
    $angka = 2; //memberikan nilai awal
    do {
        $prima = true;  //cek apakah angka merupakan bilangan prima atau bukan
        for ($z=2; $z < $angka; $z++){
            if ($angka % $z == 0){
                $prima = false;     //jika angka dapat dibagi oleh bilangan lain, maka angka tersebut bukan bilangan prima
                break;
            }
        }
        if ($prima){
            echo "$angka <br>"; //menampilkan bilangan prima
        }
        $angka++;
    }
    while ($angka < 20);    //melakukan perulangan sampai batas yang sudah ditentukan
    ?>
</body>
</html>