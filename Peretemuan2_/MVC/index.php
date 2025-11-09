<?php
require_once 'init.php';

use app\controllers\User;

$userController = new User();
$userController->index();
?>
