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
				<td><input type="text" name="nip" class="form-control"></td>
			</tr>
			<tr>
				<td>Nama Dokter</td>
				<td><input type="text" name="nama_dokter" class="form-control"></td>
			</tr>
			<tr>
				<td>Alamat Dokter</td>
				<td><input type="text" name="alamat_dokter" class="form-control"></td>
			</tr>
			<tr>
				<td>Kontak</td>
				<td><input type="text" name="no_telepon" class="form-control"></td>
			</tr>
			<tr>
				<td>Tarif</td>
				<td><input type="text" name="tarif_dokter" class="form-control"></td>
			</tr>
			<tr>
				<td>Spesialis</td>
				<td><input type="text" name="spesialis" class="form-control"></td>
			</tr>
		</table>
		<button type="submit" name="create" class="btn btn-primary">Simpan</button>
	</form>
</body>
</html>