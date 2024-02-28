<?php

include("config.php");

if(isset($_POST['create'])){

	$nip = $_POST['nip'];
	$nama_dokter = $_POST['nama_dokter'];
	$alamat_dokter = $_POST['alamat_dokter'];
	$kontak = $_POST['no_telepon'];
	$tarif_dokter = $_POST['tarif_dokter'];
	$spesialis = $_POST['spesialis'];

	$sql = "INSERT INTO dokter (nip, nama_dokter, alamat_dokter, no_telepon, tarif_dokter, spesialis)
	VALUE ('$nip', '$nama_dokter', '$alamat_dokter', '$kontak', '$tarif_dokter', '$spesialis')";

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