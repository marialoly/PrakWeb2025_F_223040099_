<?php
namespace app\controllers;
use app\models\Produk_model;

class Produk {
    private $model;

    public function __construct() {
        session_start();
        if (!isset($_SESSION['produk'])) {
            $_SESSION['produk'] = [
                ["id" => 1, "nama" => "Buku", "harga" => 20000],
                ["id" => 2, "nama" => "Pensil", "harga" => 5000],
                ["id" => 3, "nama" => "Tas", "harga" => 120000],
            ];
        }
        $this->model = new Produk_model();
    }

    public function index() {
        $produk = $this->model->getAllProduk();
        require __DIR__ . '/../views/produk_list.php';
    }

    public function detail($id) {
        $p = $this->model->getProdukById($id);
        require __DIR__ . '/../views/produk_detail.php';
    }

    public function formTambah() {
        require __DIR__ . '/../views/produk_add.php';
    }

    public function tambah($nama, $harga) {
        $this->model->tambahProduk($nama, $harga);
        header('Location: index.php');
        exit;
    }

    public function formUbah($id) {
        $p = $this->model->getProdukById($id);
        require __DIR__ . '/../views/produk_edit.php';
    }

    public function ubah($id, $nama, $harga) {
        $this->model->ubahProduk($id, $nama, $harga);
        header('Location: index.php');
        exit;
    }

    public function hapus($id) {
        $this->model->hapusProduk($id);
        header('Location: index.php');
        exit;
    }
}
?>
