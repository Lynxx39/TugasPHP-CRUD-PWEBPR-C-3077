<?php
include 'koneksi.php'; // Menggunakan file koneksi yang sudah dibuat

// Mengambil data dari form
$nama = $_POST['nama'];
$barang = $_POST['barang'];
$nomor_hp = $_POST['nomor'];
$foto = $_FILES['foto']['name'];
$lokasi = $_FILES['foto']['tmp_name'];

move_uploaded_file($lokasi, "uploads/".$foto);
// Query untuk memasukkan data
$sql = "INSERT INTO db_sewa (nama_peminjam, barang, no_hp, foto) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $nama, $barang, $nomor_hp, $foto);

// Eksekusi query
if ($stmt->execute()) {
    echo "Data berhasil ditambah.";
    // Tutup statement dan koneksi
    $stmt->close();
    $conn->close();

    // Alihkan ke halaman index.php setelah data berhasil ditambahkan
    header("Location: index.php");
    exit();
} else {
    echo "Error: " . $stmt->error;
    // Tutup statement dan koneksi
    $stmt->close();
    $conn->close();
}
?>
