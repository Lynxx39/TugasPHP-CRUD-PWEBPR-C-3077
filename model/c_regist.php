<?php

require('koneksi.php');

function registrasi($data) {
    global $conn;
    $fullname = strtolower(stripslashes($data["fullname"]));
    $username = strtolower($data["username"]);
    $password = mysqli_real_escape_string($conn, $data["password"]);
    
    // cek username sudah ada atau belum
    $result = mysqli_query($conn,"SELECT username FROM auth WHERE username = '$username'");
    if (mysqli_num_rows($result) > 0) {
        echo "
            <script>
                alert('Username sudah terdaftar!')
            </script>
        ";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan userbaru ke database
    mysqli_query($conn,"INSERT INTO auth VALUES(0, '$fullname', '$username', '$password')");

    return mysqli_affected_rows($conn);
}
?>