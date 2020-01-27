<?php 
require 'koneksi.php';
 
function tambah($data) {
    global $conn;
    $nama = $_POST(["nama"]);
    $alamat = $_POST(["alamat"]);
    $pekerjaan = $_POST(["pekerjaan"]);

    $query_tambah = ("INSERT INTO user VALUE ('', '$nama',''$alamat, '$pekerjaan')");
    query($conn, $query_tambah);
    return mysqli_affected_rows($conn);

}












?>