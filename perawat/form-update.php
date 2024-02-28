<?php
include("config.php");
if( !isset($_GET['id']) ){
	header('Location: index.php');
}

$id = $_GET['id'];
$sql = "SELECT * FROM perawat WHERE id_perawat=$id";
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
	<form action="process-create.php" method="POST">
		<table border="0">
			<tr>
				<td></td>
				<td><input type="hidden" name="id_perawat" value="<?php echo $data['id_perawat'] ?>" /></td>
			</tr>
			<tr>
				<td>NIP</td>
				<td><input type="text" name="nip" value="<?php echo $data['nip'] ?>"></td>
			</tr>
			<tr>
				<td>Nama Perawat</td>
				<td><input type="text" name="nama_perawat" value="<?php echo $data['nama_perawat'] ?>"></td>
			</tr>
			<tr>
				<td>Alamat Perawat</td>
				<td><textarea name="alamat"><?php echo $data['alamat'] ?></textarea></td>
			</tr>
			<tr>
				<td>Shift Jaga</td>
				<td>
					<?php $shift_jaga = $data['shift_jaga']; ?>
					<select name="shift_jaga">
						<option selected disabled>Pilih Salah Satu</option>
						<option <?php echo ($shift_jaga == 'Pagi') ? "selected": "" ?>>Pagi</option>
						<option <?php echo ($shift_jaga == 'Siang') ? "selected": "" ?>>Siang</option>
						<option <?php echo ($shift_jaga == 'Malam') ? "selected": "" ?>>Malam</option>
					</select>
				</td>
			</tr>
		</table>
		<button type="submit" name="create" class="btn btn-primary">Simpan</button>
	</form>
</body>
</html>