<?php
  require('koneksi.php');
  require 'c_update.php';
  $data = read('SELECT * FROM db_sewa');

  if (isset($_POST['submit'])) {
    update($_POST['id'], $_POST);
  }
  else{
    $id = $_GET['id'];
    $data1 = read('SELECT * FROM db_sewa WHERE id =' . $id)[0];
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <link rel="stylesheet" href="CreateUpdateData.css">
</head>
<body>
      <div class="container">
      <h1>Update Data</h1>
        <form class="form" action="update.php" method="POST" enctype="multipart/form-data">
          <hr>
              <input type="hidden" name="gambarLama" value="<?= $data1['foto']?>">
              <input type="hidden" name="id" value="<?= $data1['id'] ?>">
              <label for="">Gambar Sebelumnya</label>
              <img src="uploads/<?= $data1['foto'] ?>" alt="" width="100"> 
              <label for="foto">Foto Orang</label>
              <input type="file" name="foto" id="foto">
              <label for="nama">Nama</label>
              <input type="text" name="nama" id="nama" value="<?= $data1['nama_peminjam']?>">
              <label for="barang">Barang yang dipinjam: </label>
              <input type="text" name="barang" id="barang" value="<?= $data1['barang']?>">
              <label for="nomor">Nomor telepon: </label>
              <input type="text" name="nomor" id="nomor" value="<?= $data1['no_hp']?>">
              <button class="create" name="submit" type="submit">Edit</button>
        </form>
      </div>
</body>
</html>