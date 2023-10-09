<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h2>Input Data</h2>
	<form method="POST" action="update.php">
	<table>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="text" name="nim" placeholder="NIM" required></td>
		</tr>
		<tr>
			<td>Nama Lengkap</td>
			<td>:</td>
			<td><input type="text" name="nama" placeholder="Nama Lengkap" required></td>
		</tr>
		<tr>
			<td>Telepon</td>
			<td>:</td>
			<td><input type="text" name="telp" placeholder="Telepon" required></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td><input type="email" name="email" placeholder="Email" required></td>
		</tr>
		<tr>
			<td>Jurusan</td>
			<td>:</td>
			<td>
				<select name="jurusan">
					<option value="Sistem Informasi">Sistem Informasi</option>
					<option value="Sistem Komputer">Sistem Komputer</option>
					<option value="Sistem Komputer">RPL</option>
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" name="simpan" value="simpan"></td>
		</tr>
	</table>
	</form>
	
</body>
</html>