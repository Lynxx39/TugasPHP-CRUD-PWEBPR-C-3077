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
                        <span class="title">E-Hoetang</span>
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
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Setting</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
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
                        <button type="button" class="button3">Tambah</button> 
                    </div>
                    
                    <table>
                        <thead>
                            <tr>
                                <td>ID Peminjam</td>
                                <td>Nama Peminjam</td>
                                <td>Barang Yang Dipinjam</td>
                                <td>No Hp</td>
                                <td>Alat</td>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>01</td>
                                <td>Steven Edwin</td>
                                <td>Meja</td>
                                <td>085755733022</td>
                                <td><button type="button" class="button">Edit</button></td>
                                <td><button type="button" class="button2">Delete</button></td>
                            </tr>

                            <tr>
                                <td>02</td>
                                <td>Ash Lynx</td>
                                <td>Parang</td>
                                <td>085755733022</td>
                                <td><button type="button" class="button">Edit</button></td>
                                <td><button type="button" class="button2">Delete</button></td>
                            </tr>

                            <tr>
                                <td>03</td>
                                <td>Budhe Sumiyati</td>
                                <td>Kursi</td>
                                <td>085755733022</td>
                                <td><button type="button" class="button">Edit</button></td>
                                <td><button type="button" class="button2">Delete</button></td>
                            </tr>

                            <tr>
                                <td>04</td>
                                <td>Muh. Ibnu Abdurrahman</td>
                                <td>Meja</td>
                                <td>085755733022</td>
                                <td><button type="button" class="button">Edit</button></td>
                                <td><button type="button" class="button2">Delete</button></td>
                            </tr>

                            <tr>
                                <td>05</td>
                                <td>Steward</td>
                                <td>Baju</td>
                                <td>085755733022</td>
                                <td><button type="button" class="button">Edit</button></td>
                                <td><button type="button" class="button2">Delete</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>