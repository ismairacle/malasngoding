<?php 
require 'koneksi.php';

// ambil data yang dikirimkan melalui url oleh index.php oleh variabel superglobal $_GET dan masukan kedalam variabel

$id = $_GET["id"];
$query_select = mysqli_query($conn, "SELECT * FROM user WHERE id = $id");
$data = mysqli_fetch_assoc($query_select);


if (isset($_POST["submit"])) {

    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $pekerjaan = $_POST["pekerjaan"];
    $query_update = ("UPDATE user SET nama='$nama', alamat='$alamat', pekerjaan='$pekerjaan' WHERE id='$id' ");
    mysqli_query($conn, $query_update);
    header("location:index.php?pesan=update");
}
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data</title>
</head>
<body>
    <a href="index.php">Kembali ke Index</a>
    <p>Edit Data</p>
    <form action="" method="post">
        <table>
            <tr>
                <td><label for="nama">Nama </label></td>
                <td><input type="text" name="nama" id="nama" value="<?= $data["nama"]; ?>"></td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat </label></td>
                <td><input type="text" name="alamat" id="alamat" value="<?= $data["alamat"]; ?>"></td>
            </tr>
            <tr>
                <td><label for="pekerjaan">Pekerjaan </label></td>
                <td><input type="text" name="pekerjaan" id="pekerjaan" value="<?= $data["pekerjaan"]; ?>"></td>        
            </tr>
            <tr>
                <td><button type="submit" name="submit">Edit Data</button></td>
            </tr>
        </table>
    </form>

</body>
</html>