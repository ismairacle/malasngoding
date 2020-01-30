<?php 

require 'koneksi.php';

$id = $_GET["id"];

mysqli_query($conn, "DELETE FROM user WHERE id='$id'") or die (myseqli_error());


header("location:index.php?pesan=hapus");

















?>