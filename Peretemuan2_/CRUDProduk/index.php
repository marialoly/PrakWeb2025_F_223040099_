<?php
require_once 'init.php';
use app\controllers\Produk;

$produkController = new Produk();

$action = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? null;

switch ($action) {
    case 'add':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $produkController->tambah($_POST['nama'], $_POST['harga']);
        } else {
            $produkController->formTambah();
        }
        break;

    case 'edit':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $produkController->ubah($_POST['id'], $_POST['nama'], $_POST['harga']);
        } else {
            $produkController->formUbah($id);
        }
        break;

    case 'delete':
        $produkController->hapus($id);
        break;

    case 'detail':
        $produkController->detail($id);
        break;

    default:
        $produkController->index();
}
?>
