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
        <form class="form" action="c_create.php" method="POST" enctype="multipart/form-data">
            <label for="foto">Foto Orang</label>
            <input type="file" id="foto" name="foto">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama">
            <label for="barang">Barang yang dipinjam: </label>
            <input type="text" name="barang" id="barang">
            <label for="nomor">Nomor telepon: </label>
            <input type="text" name="nomor" id="nomor">
            <button class="create" type="submit">Tambah Data</button>
        </form>
      </div>
</body>
</html>