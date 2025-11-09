<!DOCTYPE html>
<html>
<head>
    <title>Detail User</title>
</head>
<body>
    <h2>Detail User</h2>
    <?php if ($user): ?>
        <p><strong>ID:</strong> <?= $user['id']; ?></p>
        <p><strong>Nama:</strong> <?= $user['nama']; ?></p>
        <p><strong>Email:</strong> <?= $user['email']; ?></p>
    <?php else: ?>
        <p>User tidak ditemukan.</p>
    <?php endif; ?>
</body>
</html>
