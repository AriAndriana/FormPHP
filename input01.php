<html>
    <head>
    <title>Pengolahan Form</title>
    </head>
    <body>
        <form action="" method="post" name="input">
            Nama Anda : <input type="text" name="nama"><br>
            <input type="submit" name="input" value="Input">
        </form>
    </body>
</html>

<?php
if (isset($_POST['input'])) {
    $nama = $_POST['nama'];
    echo "Nama anda : <b>$nama</b> ";
}
?>