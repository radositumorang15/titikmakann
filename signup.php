<?php
include "db.php";
if(isset($_POST['submit'])) {
  $email = $_POST['mail'];
  $password = $_POST['password'];
  $verifikasi_password = $_POST['verif'];
        $pattern = '/^(?=.*[A-Z])(?=.*[0-8])/';
        if (strlen($password) < 7) {
          echo "<script type='text/javascript'> alert('Password minimal harus terdiri dari 8 karakter!')</script>";
          }
          elseif ($password != $verifikasi_password) {
            echo "<script type='text/javascript'> alert('Password tidak sama!')</script>";
          }else {
            if (preg_match($pattern, $password)) {
              $email = $_POST['mail'];
              $query = "SELECT * FROM user WHERE email='$email'";
              $result = $koneksi->query($query);
              if ($result->num_rows > 0) {
                echo "<script type='text/javascript'> alert('Username sudah digunakan!')</script>";
              }else {
                $password = md5($password);
                $verifikasi_password = md5($verifikasi_password);
                $query = "INSERT INTO user (`email`, `password`, `ver_password`)
                VALUES ('$email' , '$password', '$verifikasi_password')";
                if ($koneksi->query($query) === TRUE) {
                  header("Location: login.php");
                }
              }
            } else {
              echo "<script type='text/javascript'> alert('Password harus unik!')</script>";
            }
          }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SignUp</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="css/signup.css" />
    <link rel="shortcut icon" href="img/stiker titik makan.png" />
  </head>

  <body>
    <div class="register-photo">
      <div class="form-container">
        <div class="image-holder"></div>
        <form method="post">
          <h2 class="text-center"><strong>Create</strong> an account.</h2>
          <div class="form-group">
            <input
              class="form-control"
              type="email"
              name="mail"
              placeholder="Email"
            />
          </div>
          <div class="form-group">
            <input
              class="form-control"
              type="password"
              name="password"
              placeholder="Password"
            />
          </div>
          <div class="form-group">
            <input
              class="form-control"
              type="password"
              name="verif"
              placeholder="Password (repeat)"
            />
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label"
                ><input class="form-check-input" type="checkbox" />I agree to
                the license terms.</label
              >
            </div>
          </div>
          <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit" name="submit">
              Sign Up
            </button>
          </div>
          <a href="login.php" class="already"
            >Sudah punya akun? Login disini.</a
          >
          <a href="index.php" class="already">Kembali Ke Home</a>
        </form>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
