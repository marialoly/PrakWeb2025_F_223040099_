<?php
require 'init.php';

use App\Produk\User as ProdukUser;
use App\Service\User as ServiceUser;

$user1 = new ProdukUser();
$user2 = new ServiceUser();

$user1->info();
echo "<br>";
$user2->info();
?>
