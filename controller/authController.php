<?php
session_start();
require_once 'koneksi.php';

class AuthController {
    private $model;

    public function __construct() {
        $this->model = new AuthModel();
    }

    public function register() {
        if (isset($_POST["register"])) {
            if ($this->model->registrasi($_POST)) {
                echo "
                    <script>
                        alert('User Baru Berhasil Ditambahkan!')
                    </script>
                ";
            } else {
                echo "Error: " . $this->model->conn->error;
            }
        }
    }

    public function login() {
        if (isset($_SESSION["login"])) {
            header("Location: index.php");
            exit;
        }

        if (isset($_POST["login"])) {
            $username = $_POST["username"];
            $password = $_POST["password"];

            $result = $this->model->cekUsername($username);

            if ($result->num_rows === 1) {
                $row = $result->fetch_assoc();
                if (password_verify($password, $row["pw"])) {
                    $_SESSION["login"] = true;
                    $_SESSION["user"] = $username;
                    header("Location: index.php");
                    exit;
                }
            }
            $error = true;
            include 'view/auth.php';
        }
    }
}

$authController = new AuthController();

if (isset($_POST["register"])) {
    $authController->register();
}

if (isset($_POST["login"])) {
    $authController->login();
}
?>
