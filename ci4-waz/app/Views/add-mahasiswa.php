<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <h2>Tambah Mahasiswa Baru</h2>

    <form action="/saveMahasiswa" method="post">
        <p>
            <label>NIM:</label>
            <input type="text" name="nim" required>
        </p>
        <p>
            <label>Nama Lengkap:</label>
            <input type="text" name="nama_lengkap" required>
        </p>
        <p>
            <label>Jenis Kelamin:</label>
            <select name="jenis_kelamin" required>
                <option value="">-- Pilih --</option>
                <option value="L">Laki-Laki</option>
                <option value="P">Perempuan</option>
            </select>
        </p>
        <p>
            <label>Tanggal Lahir:</label>
            <input type="date" name="tanggal_lahir" required>
        </p>

        <button type="submit">Simpan</button>
        <a href="/listmahasiswa">Batal</a>
    </form>
</body>
</html>
