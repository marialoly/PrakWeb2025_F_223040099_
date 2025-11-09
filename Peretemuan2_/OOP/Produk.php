<?php
// =======================================
// FILE: Produk.php
// Konsep: Inheritance + Overriding + Visibility + Setter/Getter
// =======================================

class Produk {
    private $judul, $penulis, $harga;

    public function __construct($judul, $penulis, $harga) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->harga = $harga;
    }

    // Setter
    public function setJudul($judul) {
        $this->judul = $judul;
    }

    public function setHarga($harga) {
        if ($harga > 0) {
            $this->harga = $harga;
        }
    }

    // Getter
    public function getJudul() {
        return $this->judul;
    }

    public function getPenulis() {
        return $this->penulis;
    }

    public function getHarga() {
        return $this->harga;
    }

    public function getInfoProduk() {
        return "{$this->judul} | {$this->penulis} (Rp. {$this->harga})";
    }
}

// ===============================
// Class Anak: Komik
// ===============================
class Komik extends Produk {
    private $jumlahHalaman;

    public function __construct($judul, $penulis, $harga, $jumlahHalaman) {
        parent::__construct($judul, $penulis, $harga);
        $this->jumlahHalaman = $jumlahHalaman;
    }

    // Override method parent
    public function getInfoProduk() {
        return "Komik: " . parent::getInfoProduk() . " - {$this->jumlahHalaman} Halaman.";
    }
}

// ===============================
// Class Anak: Game
// ===============================
class Game extends Produk {
    private $waktuMain;

    public function __construct($judul, $penulis, $harga, $waktuMain) {
        parent::__construct($judul, $penulis, $harga);
        $this->waktuMain = $waktuMain;
    }

    // Override method parent
    public function getInfoProduk() {
        return "Game: " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
    }
}

// ===============================
// Contoh penggunaan
// ===============================
$komik = new Komik("One Piece", "Eiichiro Oda", 60000, 250);
$game = new Game("FIFA 25", "EA Sports", 500000, 80);

echo $komik->getInfoProduk() . "<br>";
echo $game->getInfoProduk();
?>
