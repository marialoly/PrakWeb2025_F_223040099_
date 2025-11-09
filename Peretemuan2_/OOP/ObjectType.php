<?php
// =======================================
// 4. OBJECT TYPE
// =======================================

// Class Rumah sebagai tipe data object
class Rumah {
    public $warna;
    public $alamat;

    public function __construct($warna, $alamat) {
        $this->warna = $warna;
        $this->alamat = $alamat;
    }
}

// Fungsi dengan parameter bertipe object Rumah
function pasangListrik(Rumah $rumah) {
    echo "Listrik berhasil dipasang di rumah berwarna {$rumah->warna}, beralamat di {$rumah->alamat}.<br>";
}

// Membuat objek Rumah
$rumah1 = new Rumah("Kuning", "Jl. Kenanga No.7");

// Memanggil fungsi dan mengirimkan objek
pasangListrik($rumah1);
?>
