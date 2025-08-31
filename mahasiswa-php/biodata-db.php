<?php
include "koneksi-db.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama          = $_POST['nama'];
    $nim           = $_POST['nim'];
    $jenisKelamin  = $_POST['jenis_kelamin'];
    $tanggalLahir  = $_POST['tanggal_lahir'];

    $query = "INSERT INTO biodata (nim, nama_lengkap, jenis_kelamin, tanggal_lahir) 
              VALUES ('$nim', '$nama', '$jenisKelamin', '$tanggalLahir')";

    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: list-biodata.php");
        exit;
    } else {
        echo "Data gagal ditambahkan: " . mysqli_error($conn);
    }
}
?>

<html>
<head>
    <title>Form Biodata</title>
</head>
<body>
    <form method="post">
        <label for="nama"> Nama Lengkap: </label>
        <input type="text" name="nama" required>
        <br>

        <label for="nim"> NIM: </label>
        <input type="text" name="nim" required>
        <br>

        <label for="jenis_kelamin"> Jenis Kelamin: </label>
        <input type="text" name="jenis_kelamin" required>
        <br>

        <label for="tanggal_lahir"> Tanggal Lahir: </label>
        <input type="date" name="tanggal_lahir" required>
        <br>

        <input type="submit" value="Simpan">
    </form>
</body>
</html>
