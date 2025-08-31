<html>
    <body>
        <form method="post" action="biodata.php">
            <label for="nama"> Nama Lengkap: </label>
            <input type="text" name="nama">
            <br>
            <label for="nim"> NIM: </label>
            <input type="text" name="nim">
            <br>
            <label for="jenis-kelamin"> Jenis Kelamin: </label>
            <input type="text" name="jenis-kelamin">
            <br>
            <label for="tanggal-lahir"> Tanggal Lahir: </label>
            <input type="date" name="tanggal-lahir">
            <br>
            <input type="submit">
        </form>
    </body>
</html>

<?php
    $nama = htmlspecialchars($_POST['nama']);
    $nim = htmlspecialchars($_POST['nim']);
    $jenisKelamin = htmlspecialchars($_POST['jenis-kelamin']);
    $tanggalLahir = htmlspecialchars($_POST['tanggal-lahir']);
        
    echo ("Nama: " . $nama . "<br>");
    echo ("NIM: ". $nim . "<br>");
    echo ("Jenis Kelamin: ". $jenisKelamin . "<br>");
    echo ("Tanggal Lahir: ". $tanggalLahir . "<br>");
?>