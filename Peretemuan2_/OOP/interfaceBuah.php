<?php
// =======================================
// 11. INTERFACE
// =======================================
interface BisaDimakan {
    public function caraMakan();
}

class Apel implements BisaDimakan {
    public function caraMakan() {
        echo "Apel dimakan dengan digigit langsung.";
    }
}

class Jeruk implements BisaDimakan {
    public function caraMakan() {
        echo "Jeruk dimakan setelah dikupas kulitnya.";
    }
}

$apel = new Apel();
$jeruk = new Jeruk();

$apel->caraMakan();
echo "<br>";
$jeruk->caraMakan();
?>
