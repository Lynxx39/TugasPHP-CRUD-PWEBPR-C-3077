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
        <form action="index.php">
          <input type="text" placeholder="Email" required />
          <input type="password" placeholder="Password" required />
          <a href="#">lupa pw?</a>
          <input type="submit" value="Login" />
        </form>
      </div>
      <div class="form signup">
        <header>Sign up</header>
        <form action="">
          <input type="text" placeholder="Nama Lengkap" required />
          <input type="text" placeholder="Email" required />
          <input type="password" placeholder="Password" required />
          <div class="checkbox">
            <input type="checkbox" id="signupCheck" />
            <label for="signupCheck">setuju kh mint?</label>
          </div>
          <input type="submit" value="Signup" />
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