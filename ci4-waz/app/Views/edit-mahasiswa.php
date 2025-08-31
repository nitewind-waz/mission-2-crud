<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
</head>
<body>
    <h2>Edit Data Mahasiswa</h2>

    <form action="/update/<?= $mhs['nim'] ?>" method="post">
        <p>
            <label>NIM:</label>
            <input type="text" name="nim" value="<?= $mhs['nim'] ?>" readonly>
        </p>
        <p>
            <label>Nama Lengkap:</label>
            <input type="text" name="nama_lengkap" value="<?= $mhs['nama_lengkap'] ?>">
        </p>
        <p>
            <label>Jenis Kelamin:</label>
            <select name="jenis_kelamin">
                <option value="L" <?= ($mhs['jenis_kelamin']=='L') ? 'selected' : '' ?>>Laki-Laki</option>
                <option value="P" <?= ($mhs['jenis_kelamin']=='P') ? 'selected' : '' ?>>Perempuan</option>
            </select>
        </p>
        <p>
            <label>Tanggal Lahir:</label>
            <input type="date" name="tanggal_lahir" value="<?= $mhs['tanggal_lahir'] ?>">
        </p>

        <button type="submit">Update</button>
        <a href="/detail/<?= $mhs['nim'] ?>">Batal</a>
    </form>
</body>
</html>
