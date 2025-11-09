<?php
// =======================================
// 9. CONSTANT
// =======================================

// Constant global
define("NAMA", "Universitas Pasundan");
echo NAMA . "<br>";

// Constant dalam class
class CobaConstant {
    const PRODI = "Teknik Informatika";
}

echo CobaConstant::PRODI . "<br>";

// Magic constant
echo "File: " . __FILE__ . "<br>";
echo "Folder: " . __DIR__;
?>
