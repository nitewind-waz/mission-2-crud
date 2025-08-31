<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mahasiswa</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <table>
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Detail</th>
        </tr>
        <?php foreach ($result as $mhs): ?>
        <tr>
            <td><?= $mhs['nim'] ?></td>
            <td><?= $mhs['nama_lengkap'] ?></td>
            <td><?= $mhs['jenis_kelamin'] ?></td>
            <td><?= $mhs['tanggal_lahir'] ?></td>
            <td><a href="/detail/<?= $mhs['nim'] ?>">View</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href="/addMahasiswa">+ Tambah Mahasiswa</a>
</body>
</html>