<?php
namespace app\models;

class User_model {
    private $users = [
        ["id" => 1, "nama" => "Andi", "email" => "andi@example.com"],
        ["id" => 2, "nama" => "Budi", "email" => "budi@example.com"],
        ["id" => 3, "nama" => "Citra", "email" => "citra@example.com"],
    ];

    public function getAllUsers() {
        return $this->users;
    }
}
?>
