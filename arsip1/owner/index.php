<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h2>Data Arsip</h2>
	<a href="input.php" style="padding:0.4% 0.8%;background-color:#009900; color:#fff;border-radius:2px;text-decoration:none;">Tambah Data</a><br><br>
	<table border="1" cellspacing="0" width="50%">
	<tr style="text-align:center;font-weight:bold;background-color:#eee;">
		<td>No</td>
		<td>NIM</td>
		<td>Nama Mahasiswa</td>
		<td>telepon</td>
		<td>email</td>
		<td>jurusan</td>
		<td>opsi</td>
	</tr>
	<?php
	include "../koneksi.php";
	$no = 1;
	$select = mysqli_query($conn,"SELECT * FROM siswa");
	while($hasil = mysqli_fetch_array($select)){
	?>
	<tr style="text-align:center;">
		<td><?php echo $no++ ?></td>
		<td><?php echo $hasil['nim']; ?></td> 
		<td><?php echo $hasil['nama']; ?></td>
		<td><?php echo $hasil['telepon']; ?></td>
		<td><?php echo $hasil['email']; ?></td>
		<td><?php echo $hasil['jurusan']; ?></td>
		<td>
		<a href="edit.php?id=<?php echo $hasil['id']; ?>">EDIT</a> ||
		<a href="hapus.php?id=<?php echo $hasil['id']; ?>">DELETE</a>
		</td>
	</tr>
	<?php } 
	?>
	</table>
</body>
</html>