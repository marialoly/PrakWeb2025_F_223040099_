<?php
// =======================================
// 1. CLASS DAN OBJECT
// =======================================
// Class = blueprint (denah rumah)
class Rumah {
    // Property (karakteristik rumah)
    public $warna;
    public $jumlahKamar;
    public $alamat;

    // =======================================
    // 2. PROPERTY DAN METHOD
    // =======================================
    // Method = perilaku/aksi yang bisa dilakukan objek
    public function nyalakanLampu() {
        echo "Lampu dinyalakan!<br>";
    }

    public function infoRumah() {
        echo "Rumah berwarna {$this->warna}, memiliki {$this->jumlahKamar} kamar, beralamat di {$this->alamat}.<br>";
    }

    // =======================================
    // 3. CONSTRUCTOR
    // =======================================
    // Constructor = method khusus yang otomatis jalan saat objek dibuat
    public function __construct($warna, $jumlahKamar, $alamat) {
        $this->warna = $warna;
        $this->jumlahKamar = $jumlahKamar;
        $this->alamat = $alamat;
    }
}

// Membuat object (instance) dari class Rumah
$rumah1 = new Rumah("Biru", 3, "Jl. Mawar No.5");
$rumah2 = new Rumah("Hijau", 5, "Jl. Anggrek No.10");

// Menampilkan informasi rumah
$rumah1->infoRumah();
$rumah2->nyalakanLampu();
$rumah2->infoRumah();
?>
