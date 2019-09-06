<html>
    <head>
        <title>Latihan Form dalam PHP</title>    
    </head>
    <body>
        <form action="" method="post" name="input">
            Nama : <input type="text" name="nama" required><br>
            Kelas : <input type="text" name="kelas"><br>
            Alamat : <input type="text" name="alamat"><br>
            Hobi : <input type="text" name="hobi"><br>
            <input type="submit" name="submit" value="submit">
            <input type="reset" name="reset">
        </form>
    </body>
</html>
<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];
    $hobi = $_POST['hobi'];
    echo "Nama : <b>$nama</b><br>Kelas : <b>$kelas</b><br>";
    echo "Alamat : <b>$alamat</b><br>Hobi : <b>$hobi</b>";
}else{
    echo "Variable salah";
}

?>