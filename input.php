<?php 
require 'koneksi.php';

// function tambah($data) {
//     global $conn;
if (isset($_POST["submit"])){
    // ditangkap dulu oleh post
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $pekerjaan = $_POST["pekerjaan"];
    // membuat query tambah/input
    $query_input = ("INSERT INTO user VALUE ('','$nama','$alamat','$pekerjaan')");
    mysqli_query($conn, $query_input);

    // return berfungsi untuk mengembalikan nilai dari sebuah fungsi yang dijalankan
    // untuk return kali ini
    // jika fungsi berhasil dijalankan maka akan mengembalikan nilai 1 dan jika gagal dijalankan maka akan mengembalikan nilai -1 atau 
    return mysqli_affected_rows($conn);
    
}

// jika function tambah bernilai lebih dari 0 yang mana nilai itu dikirimkan dari return mysqli_affected_rows($conn); dan ditangkap oleh $_POST  maka tampilkan alert berhasil dan direct ke halaman index tetapi jika gagal tampilkan alert gagal dan tampilkan letak kesalahan
// if (tambah($_POST) > 0) {
//     echo "<script>
//         alert('Data berhasil ditambahkan');
//         <script>
//     ";
// } else {
//     echo "<script>
//         alert('Data gagal ditambahkan');
//         <script>
//     ";
// }





?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data</title>
</head>
<body>
    <p>Tambah Data Baru</p>
    <form action="" method="post">
        <table>
            <tr>
                <td><label for="nama">Nama </label></td>
                <td><input type="text" name="nama" id="nama"></td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat </label></td>
                <td><input type="text" name="alamat" id="alamat"></td>
            </tr>
            <tr>
                <td><label for="pekerjaan">Pekerjaan </label></td>
                <td><input type="text" name="pekerjaan" id="pekerjaan"></td>        
            </tr>
            <tr>
                <td><button type="submit" name="submit">Simpan</button></td>
            </tr>
        </table>
    </form>

</body>
</html>