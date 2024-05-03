<?php
// Parameter koneksi database
$servername = "localhost";  // Server database, biasanya "localhost"
$username = "root";  // Username database
$password = "";  // Password database
$dbname = "e-sewa";  // Nama database

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Mengecek koneksi
function read($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
?>
