<?php

include("config.php");

if(isset($_POST['update'])){

	$id = $_POST['id_pasien'];
	$nama_pasien = $_POST['nama_pasien'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$umur = $_POST['umur'];
	$alamat_pasien = $_POST['alamat_pasien'];

	$sql = "UPDATE pasien SET nama_pasien='$nama_pasien', jenis_kelamin='$jenis_kelamin',
	umur='$umur', alamat_pasien='$alamat_pasien' WHERE id_pasien=$id";
	$query = mysqli_query($db, $sql);

	if( $query ) {
		header('Location: index.php');
	} else {
		die("Gagal menyimpan perubahan...");
	}
} else {
    die("Akses dilarang...");
}

?>