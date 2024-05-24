<?php 
session_start();
require("c_regist.php");

if (isset($_POST["register"])) {
  if (registrasi($_POST) >  0 ) {
      echo "
          <script>
              alert('User Baru Berhasil Ditambahkan!')
          </script>
      ";
  } else {
      echo mysqli_error($conn);
  }
}

if(isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}


if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn,"SELECT * FROM auth WHERE username = '$username'");

    // cek username
    if (mysqli_num_rows($result) === 1) {
        // cek password
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["pw"])) {
            // set session
            $_SESSION["login"] = true;
            $_SESSION["user"] = $username;
            header("Location: index.php");
            exit;
        };
    }

    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Login Register</title>
    <link rel="stylesheet" href="auth.css" />
  </head>
  <body>
    <section class="wrapper">
      <div class="form login">
        <header>Login</header>
        <form action="" method="post">
          <input type="text" name='username' placeholder="Email" required />
          <input type="password" name="password" placeholder="Password" required />
          <a href="#">lupa pw?</a>
          <input type="submit" name="login" value="Login" />
        </form>
      </div>
      <div class="form signup">
        <header>Sign up</header>
        <form action="" method ="post">
          <input type="text" name="fullname" placeholder="Full Name" required />
          <input type="text" name="username" placeholder="Username" required />
          <input type="password" name="password" placeholder="Password" required />
          <input type="submit" name="register" value="Sign up" />
        </form>
      </div>

      <script>
        const wrapper = document.querySelector(".wrapper"),
          loginHeader = document.querySelector(".login header"),
          signupHeader = document.querySelector(".signup header");
        loginHeader.addEventListener("click", () => {
          wrapper.classList.add("active");
        });
        signupHeader.addEventListener("click", () => {
          wrapper.classList.remove("active");
        });
      </script>
    </section>
  </body>
</html>