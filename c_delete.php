<?php
// delete.php
include 'koneksi.php'; // Include script koneksi database

$id = $_GET['id']; // Dapatkan id dari URL

if ($id) {
    $query = "DELETE FROM db_sewa WHERE id= ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id); // 'i' berarti tipe data integer
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "Data berhasil dihapus.";
    } else {
        echo "Gagal menghapus data atau Data tidak ditemukan.";
    }
    $stmt->close();
    $conn->close();
    header("Location: index.php"); // Alihkan kembali ke halaman utama
} else {
    echo "ID tidak ditemukan.";
}
?>
