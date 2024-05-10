<?php
require_once 'koneksi.php';  // Include the database connection file
function upload()
    {

        $namaFile = $_FILES["foto"]["name"];
        $ukuranFile = $_FILES["foto"]["size"];
        $tmpName = $_FILES["foto"]["tmp_name"];

        //cek apakah ada gambar yang di upload
        $eksentensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
        if (!in_array($ekstensiGambar, $eksentensiGambarValid)) {
            echo "
            <script>
                alert('Upload hanya gambar, jangan file lain!');
                window.location.href = 'index.php';
            </script>;";
            exit();
        } else if (in_array($ekstensiGambar, $eksentensiGambarValid)) {
            // cek jika ukurannya terlalu besar
            if ($ukuranFile > 10000000) {
                echo "
                <script>
                    alert('Ukuran gambar terlalu besar!')
                </script>;
        ";
            } else {
                // generate nama file baru
                $namaFileBaru = uniqid();
                $namaFileBaru .= "." . $ekstensiGambar;
                // lolos pengecekan, gambar siap diupload
                move_uploaded_file($tmpName, 'uploads/' . $namaFileBaru);
                return $namaFileBaru;
            }
        }
        return false;
    }

function update($id, $data)
    {

        global $conn;
        $nama = htmlspecialchars($data['nama']);
        $barang = htmlspecialchars($data['barang']);
        $nomor_hp = htmlspecialchars($data['nomor']);
        $gambarLama = htmlspecialchars($data['gambarLama']);

        // cek apakah user memilih gambar baru atau tidak
        if ($_FILES['foto']['name'] === "") {
            $gambar = $gambarLama;
        } else {
            $gambar = upload();
        }

        $stmt = $conn->prepare("UPDATE db_sewa set nama_peminjam=?, barang=?, no_hp=?, foto=? WHERE id=" . $id);
        $stmt->bind_param("ssss", $nama, $barang, $nomor_hp, $gambar);
        $stmt->execute();
        $result = $stmt->affected_rows > 0 ? true : false;
        $stmt->close();
        if ($result) {
            echo "<script> alert('Data Berhasil di simpan');window.location.href = 'index.php'</script>";
        }
        return $result;
    }
?>