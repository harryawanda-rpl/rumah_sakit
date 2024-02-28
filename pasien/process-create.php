<?php

include("config.php");

if(isset($_POST['create'])){

	$nama_pasien = $_POST['nama_pasien'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$umur = $_POST['umur'];
	$alamat_pasien = $_POST['alamat_pasien'];

	$sql = "INSERT INTO pasien (nama_pasien, jenis_kelamin, umur, alamat_pasien)
	VALUE ('$nama_pasien', '$jenis_kelamin', '$umur', '$alamat_pasien')";

	$query = mysqli_query($db, $sql);
	
	if( $query ) {
		header('Location: index.php?status=sukses');
	} else {
		header('Location: index.php?status=gagal');
	}
} else {
	die("Akses dilarang...");
}

?>