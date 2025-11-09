<!DOCTYPE html>
<html>
<head>
    <title>Daftar Produk</title>
    <style>
        body { font-family: Arial; margin: 40px; }
        table { border-collapse: collapse; width: 70%; }
        th, td { border: 1px solid #888; padding: 8px; text-align: left; }
        th { background: #f2f2f2; }
        a { text-decoration: none; color: blue; }
    </style>
</head>
<body>
    <h2>Daftar Produk</h2>
    <a href="index.php?action=add">➕ Tambah Produk</a>
    <br><br>
    <table>
        <tr><th>ID</th><th>Nama</th><th>Harga</th><th>Aksi</th></tr>
        <?php foreach($produk as $p): ?>
        <tr>
            <td><?= $p['id'] ?></td>
            <td><?= $p['nama'] ?></td>
            <td>Rp <?= number_format($p['harga'], 0, ',', '.') ?></td>
            <td>
                <a href="index.php?action=detail&id=<?= $p['id'] ?>">Detail</a> |
                <a href="index.php?action=edit&id=<?= $p['id'] ?>">Edit</a> |
                <a href="index.php?action=delete&id=<?= $p['id'] ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
