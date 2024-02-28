<!DOCTYPE html>
<html>
<head>
	<title>DATA</title>
</head>
<body>
	<h3>CREATE DATA</h3>
	<form action="process-create.php" method="POST">
		<table border="0">
			<tr>
				<td>NIP</td>
				<td><input type="text" name="nip"></td>
			</tr>
			<tr>
				<td>Nama Perawat</td>
				<td><input type="text" name="nama_perawat"></td>
			</tr>
			<tr>
				<td>Alamat Perawat</td>
				<td><textarea name="alamat"></textarea></td>
			</tr>
			<tr>
				<td>Shift Jaga</td>
				<td>
					<select name="shift_jaga">
						<option selected disabled>Pilih Salah Satu</option>
						<option>Pagi</option>
						<option>Siang</option>
						<option>Malam</option>
					</select>
				</td>
			</tr>
		</table>
		<button type="submit" name="create" class="btn btn-primary">Simpan</button>
	</form>
</body>
</html>