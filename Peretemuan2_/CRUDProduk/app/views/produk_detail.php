<!DOCTYPE html>
<html>
<head><title>Detail Produk</title></head>
<body>
    <h2>Detail Produk</h2>
    <?php if ($p): ?>
        <p><strong>ID:</strong> <?= $p['id']; ?></p>
        <p><strong>Nama:</strong> <?= $p['nama']; ?></p>
        <p><strong>Harga:</strong> Rp <?= number_format($p['harga'], 0, ',', '.'); ?></p>
    <?php else: ?>
        <p>Produk tidak ditemukan.</p>
    <?php endif; ?>
    <a href="index.php">Kembali</a>
</body>
</html>
