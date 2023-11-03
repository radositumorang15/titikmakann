<?php
session_start();
include "db.php";
if(isset($_POST['login'])) {
  $myemail = $_POST['email'];
  $mypassword = md5($_POST['password']); 
  $query = "SELECT * FROM user WHERE email = '$myemail'";
  $data = $koneksi->query($query);

  foreach($data as $row) {
    if ($myemail != $row['email']) {
      echo "<script type='text/javascript'> alert('Password salah!')</script>";
    }
    if(($myemail == $row['email']) && (($mypassword) == $row['password'])) {
        $_SESSION['guest'] = $myemail;
        $_SESSION['password'] = $mypassword;
        if(isset($_POST['remember'])) {
            setcookie('email', $myemail, time()+3600, '/');
            setcookie('password', $mypassword, time()+3600, '/');
        }
        
        echo "<script type='text/javascript'> alert('Berhasil Login!')</script>";
        header("location:index.php");
      } else {
          echo "<script type='text/javascript'> alert('Password salah!')</script>";
        }
      }
    }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
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
          <h2 class="text-center"><strong>L</strong>ogin</h2>
          <div class="form-group">
            <input
              class="form-control"
              type="email"
              name="email"
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
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                <label class="form-check-label" for="exampleCheck1">Remember Me</label>
            </div>
          </div>
          <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit" name="login">
              Login
            </button>
          </div>
          <a href="signup.php" class="already"
            >belum ada akun? SignUp disini.</a
          >
          <a href="admin/adminlogin.php" class="already">Login admin</a>
          <a href="index.php" class="already">Kembali Ke Home</a>
        </form>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
