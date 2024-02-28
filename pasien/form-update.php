<?php
include("config.php");
if( !isset($_GET['id']) ){
	header('Location: index.php');
}

$id = $_GET['id'];
$sql = "SELECT * FROM pasien WHERE id_pasien=$id";
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
				<td><input type="hidden" name="id_pasien" value="<?php echo $data['id_pasien'] ?>" /></td>
			</tr>
			<tr>
				<td>Nama Pasien</td>
				<td><input type="text" name="nama_pasien" value="<?php echo $data['nama_pasien'] ?>" ></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>
					<?php $jenis_kelamin = $data['jenis_kelamin']; ?>
					<select name="jenis_kelamin">
						<option disabled>Pilih Salah Satu</option>
						<option <?php echo ($jenis_kelamin == 'Laki-laki') ? "selected": "" ?>>Laki-laki</option>
						<option <?php echo ($jenis_kelamin == 'Perempuan') ? "selected": "" ?>>Perempuan</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Umur</td>
				<td><input type="text" name="umur" value="<?php echo $data['umur'] ?>" ></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><textarea name="alamat_pasien"><?php echo $data['alamat_pasien'] ?></textarea></td>
			</tr>
			<tr>
				<td>&nbsp</td>
			</tr>
		</table>
		<button type="submit" name="update" class="btn btn-primary">Simpan</button>
	</form>
</body>
</html>