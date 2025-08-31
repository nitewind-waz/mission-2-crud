<?php
    include "koneksi-db.php";

    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    if (isset($_GET['nim'])) {
        $nim = $_GET['nim'];
        $sql = "SELECT * FROM biodata WHERE nim = '$nim'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
        } else {
        echo "Data tidak ditemukan.";
        exit;
    }
    } else {
    echo "NIM tidak diberikan.";
    exit;
    }
?>

<html>
    <body>
        <h2>Detail Mahasiswa</h2>
        <p><b>NIM: </b> <?php echo ($row["nim"]) ?> </p> 
        <p><b>Nama Lengkap: </b> <?php echo ($row["nama_lengkap"]) ?> </p> 
        <p><b>Jenis Kelamin: </b> <?php echo ($row["jenis_kelamin"]) ?> </p> 
        <p><b>Tanggal Lahir: </b> <?php echo ($row["tanggal_lahir"]) ?> </p> 

        <a href="list-biodata.php">Kembali ke daftar</a>
    </body>

</html>
