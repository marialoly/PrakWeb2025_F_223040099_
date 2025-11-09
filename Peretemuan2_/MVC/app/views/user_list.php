<!DOCTYPE html>
<html>
<head>
    <title>Daftar User</title>
    <style>
        body { font-family: Arial; margin: 40px; }
        table { border-collapse: collapse; width: 60%; }
        th, td { border: 1px solid #888; padding: 8px; text-align: left; }
        th { background: #f2f2f2; }
    </style>
</head>
<body>
    <h2>Daftar User</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
        </tr>
        <?php foreach($users as $user): ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['nama'] ?></td>
            <td><?= $user['email'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
