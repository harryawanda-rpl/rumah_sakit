<?php

include("config.php");

if(isset($_POST['create'])){

	$nip = $_POST['nip'];
	$nama_perawat = $_POST['nama_perawat'];
	$alamat = $_POST['alamat'];
	$shift_jaga = $_POST['shift_jaga'];

	$sql = "INSERT INTO perawat (nip, nama_perawat, alamat, shift_jaga)
	VALUE ('$nip','$nama_perawat', '$alamat', '$shift_jaga')";

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