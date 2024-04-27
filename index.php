<?php

require('koneksi.php');
$data = read('SELECT * FROM db_sewa');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashboardCRUD</title>
    <link rel="stylesheet" href="style.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="logo-buffer"></ion-icon>
                        </span>
                        <span class="title">E-Sewa</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="folder-open-outline"></ion-icon>
                        </span>
                        <span class="title">Data Peminjaman</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="person-circle-outline"></ion-icon>
                        </span>
                        <span class="title">Profile</span>
                    </a>
                </li>

                <li>
                    <a href="auth.html">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Logout</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Nyari apa wak?">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="user">
                    <img src="assets/amirul.JPG" alt="">
                </div>
            </div>
            <div class="details">
                <div class="border-details">
                    <div class="top-table">
                        <h2>Detail Peminjaman</h2>
                        <button type="button" class="button3" onclick="location.href='createData.php';">Tambah</button> 
                    </div>         
                    
                    <table>
                        <thead>
                            <tr>
                                <td>Nama Peminjam</td>
                                <td>Barang Yang Dipinjam</td>
                                <td>No Hp</td>
                                <td>Alat</td>
                            </tr>
                        </thead>
                        <?php foreach($data as $row): ?> <!-- Looping data -->
                        <tbody>
                            <tr>
                                <td><?=$row['nama_peminjam']?></td>
                                <td><?=$row['barang']?></td>
                                <td><?=$row['no_hp']?></td>
                                <td><button type="button" class="button" onclick="location.href='update.php';">Edit</button></td>
                                <td><a href="c_delete.php?id=<?=$row['id']?>"><button type="button" class="button2">Delete</button></a></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>