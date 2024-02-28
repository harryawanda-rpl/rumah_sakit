<?php include("config.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>DATA</title>
  <style>
  table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    padding: 10px;
  }
  </style>
</head>
<body>
	<h2>INDEX DATA</h2>
  <a href="form-create.php" class="btn btn-primary">Tambah Data</a>
  <?php if(isset($_GET['status'])): ?>
    <?php
    if($_GET['status'] == 'sukses'){
      echo "Penambahan data berhasil!";
    } else {
      echo "Penambahan data gagal!";
    }
    ?>
  <?php endif; ?>
  <table>
    <thead>
      <tr align="center">
        <th>No</th>
        <th>NIP</th>
        <th>Nama Dokter</th>
        <th>Alamat</th>
        <th>Kontak</th>
        <th>Tarif</th>
        <th>Spesialis</th>
        <th>Pilihan</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no = 1;
      $query = $db->query("SELECT * FROM dokter");
      while ($data = $query->fetch_assoc()){ 
      ?>
      <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $data['nip'] ?></td>
        <td><?php echo $data['nama_dokter'] ?></td>
        <td><?php echo $data['alamat_dokter'] ?></td>
        <td><?php echo $data['no_telepon'] ?></td>
        <td><?php echo $data['tarif_dokter'] ?></td>
        <td><?php echo $data['spesialis'] ?></td>
        <td align="center">
          <a href="form-update.php?id=<?php echo $data['id_dokter'] ?>">Edit</a>
          <a onclick="return confirm('Anda yakin ingin menghapus data?')"
          href="delete.php?id=<?php echo $data['id_dokter'] ?>">Hapus</a>
        </td>
      </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
		<p>Total Entri: <?php echo mysqli_num_rows($query) ?></p>
	</div>
</body>
</html>