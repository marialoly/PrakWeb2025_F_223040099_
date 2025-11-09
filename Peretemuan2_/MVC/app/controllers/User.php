<?php
namespace app\controllers;

use app\models\User_model;

class User {
    private $model;

    public function __construct() {
        $this->model = new User_model();
    }

    public function index() {
        $users = $this->model->getAllUsers();
        require __DIR__ . '/../views/user_list.php';
    }
}
?>
