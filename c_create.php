<?php
include 'koneksi.php'; // Menggunakan file koneksi yang sudah dibuat

// Mengambil data dari form
$nama = $_POST['nama'];
$kamar = $_POST['barang'];
$nomor_hp = $_POST['nomor'];

// Query untuk memasukkan data
$sql = "INSERT INTO db_sewa (nama_peminjam, barang, no_hp) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $nama, $kamar, $nomor_hp);

// Eksekusi query
if ($stmt->execute()) {
    echo "Data berhasil ditambahkan.";
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
