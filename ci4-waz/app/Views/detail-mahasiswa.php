<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Detail Mahasiswa</h2>
    <p><b>NIM:</b> <?= $mhs['nim'] ?></p>
    <p><b>Nama:</b> <?= $mhs['nama_lengkap'] ?></p>
    <p><b>Jenis Kelamin:</b> <?= $mhs['jenis_kelamin'] ?></p>
    <p><b>Tanggal Lahir:</b> <?= $mhs['tanggal_lahir'] ?></p>
    
    <p><a href="/edit/<?= $mhs['nim'] ?>">Edit</a></p>
    <p><a href="/delete/<?= $mhs['nim'] ?>">Delete</a></p>
    <p><a href="/listmahasiswa">Kembali ke daftar</a></p>

</body>
</html>