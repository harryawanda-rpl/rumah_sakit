<?php
include("config.php");
if( !isset($_GET['id']) ){
	header('Location: index.php');
}

$id = $_GET['id'];
$sql = "SELECT * FROM dokter WHERE id_dokter=$id";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>DATA</title>
</head>
<body>
	<h3>Update Data</h3>
	<form action="process-update.php" method="POST">
		<table border="0">
			<tr>
				<td></td>
				<td><input type="hidden" name="id_dokter" value="<?php echo $data['id_dokter'] ?>" /></td>
			</tr>
			<tr>
				<td>NIP</td>
				<td><input type="text" name="nip" value="<?php echo $data['nip'] ?>"></td>
			</tr>
			<tr>
				<td>Nama Dokter</td>
				<td><input type="text" name="nama_dokter" value="<?php echo $data['nama_dokter'] ?>"></td>
			</tr>
			<tr>
				<td>Alamat Dokter</td>
				<td><input type="text" name="alamat_dokter" value="<?php echo $data['alamat_dokter'] ?>"></td>
			</tr>
			<tr>
				<td>Kontak</td>
				<td><input type="text" name="no_telepon" value="<?php echo $data['no_telepon'] ?>"></td>
			</tr>
			<tr>
				<td>Tarif</td>
				<td><input type="text" name="tarif_dokter" value="<?php echo $data['tarif_dokter'] ?>"></td>
			</tr>
			<tr>
				<td>Spesialis</td>
				<td><input type="text" name="spesialis" value="<?php echo $data['spesialis'] ?>"></td>
			</tr>
			<tr>
				<td>&nbsp</td>
			</tr>
		</table>
		<button type="submit" name="update" class="btn btn-primary">Simpan</button>
	</form>
</body>
</html>