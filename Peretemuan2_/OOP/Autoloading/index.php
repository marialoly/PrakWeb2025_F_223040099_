<?php
require 'init.php';

$animal = new Animal();
$cat = new Cat();

$animal->suara();
echo "<br>";
$cat->suara();
?>
