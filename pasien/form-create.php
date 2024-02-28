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
				<td>Nama Pasien</td>
				<td><input type="text" name="nama_pasien"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>
					<select name="jenis_kelamin">
						<option selected disabled>Pilih Salah Satu</option>
						<option>Laki-laki</option>
						<option>Perempuan</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Usia</td>
				<td><input type="text" name="usia"></td>
			</tr>
			<tr>
				<td>Alamat Pasien</td>
				<td><textarea name="alamat_pasien"></textarea></td>
			</tr>
		</table>
		<button type="submit" name="create" class="btn btn-primary">Simpan</button>
	</form>
</body>
</html>