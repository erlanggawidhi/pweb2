<?php
class Queue {
    private $elements = [];

    // Menambahkan elemen ke dalam antrean (enqueue)
    public function enqueue($item) {
        array_push($this->elements, $item);
    }

    // Menghapus dan mengembalikan elemen dari antrean (dequeue)
    public function dequeue() {
        if (!$this->isEmpty()) {
            return array_shift($this->elements);
        } else {
            return null; // Antrean kosong
        }
    }

    // Mengecek apakah antrean kosong
    public function isEmpty() {
        return empty($this->elements);
    }
}

// Membuat objek antrean
$antrean = new Queue();

// Menambahkan elemen ke dalam antrean
$antrean->enqueue("Pelanggan 1");
$antrean->enqueue("Pelanggan 2");
$antrean->enqueue("Pelanggan 3");

// Mengambil dan menampilkan elemen dari antrean
echo "Pelanggan yang dilayani:<br>";
while (!$antrean->isEmpty()) {
    echo $antrean->dequeue() . "<br>";
}

// Mengecek apakah antrean kosong
if ($antrean->isEmpty()) {
    echo "Antrean kosong.";
}
?>