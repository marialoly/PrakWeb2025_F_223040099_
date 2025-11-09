<?php
namespace app\models;

class Produk_model {
    public function getAllProduk() {
        return $_SESSION['produk'];
    }

    public function getProdukById($id) {
        foreach ($_SESSION['produk'] as $p) {
            if ($p['id'] == $id) {
                return $p;
            }
        }
        return null;
    }

    public function tambahProduk($nama, $harga) {
        $newId = end($_SESSION['produk'])['id'] + 1;
        $_SESSION['produk'][] = [
            "id" => $newId,
            "nama" => $nama,
            "harga" => $harga
        ];
    }

    public function ubahProduk($id, $nama, $harga) {
        foreach ($_SESSION['produk'] as &$p) {
            if ($p['id'] == $id) {
                $p['nama'] = $nama;
                $p['harga'] = $harga;
            }
        }
    }

    public function hapusProduk($id) {
        foreach ($_SESSION['produk'] as $key => $p) {
            if ($p['id'] == $id) {
                unset($_SESSION['produk'][$key]);
            }
        }
    }
}
?>
