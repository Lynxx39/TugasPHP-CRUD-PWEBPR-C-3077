<?php
include 'koneksi.php'; // Menggunakan file koneksi yang sudah dibuat

// Mengambil data dari form
$id = $_POST['id']; // diasumsikan form mengirimkan 'id' dari data yang akan diupdate
$nama = $_POST['nama'];
$barang = $_POST['barang'];
$nomor_hp = $_POST['nomor'];

// Query untuk memperbarui data
$sql = "UPDATE db_sewa SET nama_peminjam=?, barang=?, no_hp=? WHERE id=?";
$stmt = $conn->prepare($sql);
if ($stmt === false) {
    die('MySQL prepare error: ' . $conn->error);
}

// Binding parameter ke query
$stmt->bind_param("sssi", $nama, $barang, $nomor_hp, $id);

// Eksekusi query
if ($stmt->execute()) {
    echo "Data berhasil diperbarui.";
    // Tutup statement dan koneksi
    $stmt->close();
    $conn->close();

    // Alihkan ke halaman index.php setelah data berhasil diperbarui
    header("Location: index.php");
    exit();
} else {
    echo "Error saat memperbarui data: " . $stmt->error;
    // Tutup statement dan koneksi
    $stmt->close();
    $conn->close();
}
?>
