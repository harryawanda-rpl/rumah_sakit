<?php

include("config.php");

if(isset($_POST['update'])){

	$id = $_POST['id_dokter'];
	$nip = $_POST['nip'];
	$nama_dokter = $_POST['nama_dokter'];
	$alamat_dokter = $_POST['alamat_dokter'];
	$kontak = $_POST['no_telepon'];
	$tarif_dokter = $_POST['tarif_dokter'];
	$spesialis = $_POST['spesialis'];

	$sql = "UPDATE dokter SET nip='$nip', nama_dokter='$nama_dokter', alamat_dokter='$alamat_dokter' ,
	no_telepon='$kontak' , tarif_dokter='$tarif_dokter' , spesialis='$spesialis' WHERE id_dokter=$id";
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