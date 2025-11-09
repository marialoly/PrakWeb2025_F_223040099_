<!DOCTYPE html>
<html>
<head><title>Edit Produk</title></head>
<body>
    <h2>Edit Produk</h2>
    <form method="POST" action="index.php?action=edit">
        <input type="hidden" name="id" value="<?= $p['id']; ?>">
        <label>Nama Produk:</label><br>
        <input type="text" name="nama" value="<?= $p['nama']; ?>" required><br><br>
        <label>Harga:</label><br>
        <input type="number" name="harga" value="<?= $p['harga']; ?>" required><br><br>
        <button type="submit">Update</button>
        <a href="index.php">Batal</a>
    </form>
</body>
</html>
