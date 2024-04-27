<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Data</title>
    <link rel="stylesheet" href="CreateUpdateData.css">
</head>
<body>
      <div class="container">
      <h1>Tambah Orang Yang Meminjam</h1>
        <form class="form" action="c_create.php" method="POST">
            <label for="tanggalTransaksi">Nama</label>
            <input type="text" name="nama" id="nama">
            <label for="nama">Barang yang dipinjam: </label>
            <input type="text" name="barang" id="barang">
            <label for="barang">Nomor telepon: </label>
            <input type="text" name="nomor" id="nomor">
            <button class="create" type="submit">Tambah Data</button>
        </form>
      </div>
</body>
</html>