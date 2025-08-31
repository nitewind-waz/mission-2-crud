<?php
 include "./koneksi-db.php";

 $sql = "SELECT * FROM biodata";

 $query = mysqli_query($conn, $sql);
 if (!$query) {
    die ('SQL Error: '. mysqli_error($conn));
 }
?>

<html>
    <body>
        <h1>List Mahasiswa</h1>
        <?php
        if (mysqli_num_rows($query) > 0){
            echo "<table>";
            echo "<tr>";
            echo "<th>Nim</th>";
            echo "<th>Nama</th>";
            echo "<th>Jenis Kelamin</th>";
            echo "<th>Tanggal Lahir</th>";
            echo "<th>Detail</th>";
            echo "</tr>";

            while ($row = mysqli_fetch_assoc($query)) {
                echo "<tr>";
                echo "<td>".$row["nim"]."</td>";
                echo "<td>".$row["nama_lengkap"]."</td>";
                echo "<td>".$row["jenis_kelamin"]."</td>";
                echo "<td>".$row["tanggal_lahir"]."</td>";
                echo "<td><a class='detail-btn' href='detail-biodata.php?nim=".$row["nim"]."'>View</a></td>";
                echo "</tr>";
            }
            echo "</table>";
        }
        else {
            echo "Tidak ada data!";
        }
        ?>
    </body>
</html>