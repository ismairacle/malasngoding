<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD</title>
</head>
<body>
    
    <br>

    
    <a href="input.php">Tambah Data</a>
<table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No. </th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Pekerjaan</th>
        <th>Opsi</th>
    </tr>
        <?php 
        require 'koneksi.php';
        //pilih data mana yang mau di tampilkan dari database
		$query_mysql = mysqli_query($conn, "SELECT * FROM user")or die(mysqli_error());
        $nomor = 1;
        ?>
        <!-- ambil data yang sudah dipilih dari database untuk menampilkannya satu persatu -->
	<?php while($data = mysqli_fetch_assoc($query_mysql)) : ?>
	<tr>
		<td><?= $nomor++; ?></td>
		<td><?= $data['nama']; ?></td>
		<td><?= $data['alamat']; ?></td>
		<td><?= $data['pekerjaan']; ?></td>
		<td>
			<a class="edit" href="edit.php?id=<?= $data['id']; ?>">Edit</a> |
			<a class="hapus" href="hapus.php?id=<?= $data['id']; ?>">Hapus</a>					
		</td>
	</tr>
    <?php endwhile; ?>
    <!-- setiap pengulangan php dalam file html harus dimulai dengan membuka tag php diawal pengulangan
    kemudain menutupnya di akhir pengulangan untuk menandai pengulangan tersebut, contohnya

    <*?php while : ?> untuk membuka pengulangan
    <*?php endwhile; ?> untuk menutup pengulangan *tanpa tanda bintang -->

    
    
</table>

</body>
</html>
