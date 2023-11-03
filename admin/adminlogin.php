<?php
session_start();
include "db.php";
if(isset($_POST['sub'])) {
  $username = $_POST['user'];
  $password = md5($_POST['pass']); 
  $query = "SELECT * FROM admin WHERE username = '$username'";
  $data = $koneksi->query($query);

  foreach($data as $row) {
    if ($username != $row['username']) {
      echo "<script type='text/javascript'> alert('Password salah!')</script>";
    }
    if(($username == $row['username']) && (($password) == $row['password'])) {
        $_SESSION['user'] = $username;
        $_SESSION['password'] = $password;
            setcookie('username', $username, time()+3600, '/');
            setcookie('password', $password, time()+3600, '/');
        
        
        echo "<script type='text/javascript'> alert('Berhasil Login!')</script>";
        header("location:main.php");
      } else {
          echo "<script type='text/javascript'> alert('Password salah!')</script>";
        }
      }
    }
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>TITIK MAKAN ADMIN</title>
  <link rel="shortcut icon" href="img/stiker titik makan.png" />
  
  
      <link rel="shortcut icon" href="admin/assets/img/monggo.png">
      <link rel="stylesheet" href="style.css">

  
</head>

<body>
  <div id="clouds">
	<div class="cloud x1"></div>
	<!-- Time for multiple clouds to dance around -->
	<div class="cloud x2"></div>
	<div class="cloud x3"></div>
	<div class="cloud x4"></div>
	<div class="cloud x5"></div>
</div>

 <div class="container">
    <h1>Titik makan admin</h1>
      <div id="login">
        <form method="post">

          <fieldset class="clearfix">

            <p><span class="fontawesome-user"></span><input type="text"  name="user" value="Username" onBlur="if(this.value == '') this.value = 'Username'" onFocus="if(this.value == 'Username') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
            <p><span class="fontawesome-lock"></span><input type="password" name="pass"  value="Password" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
            <p><input type="submit" name="sub"  value="Login"></p>

          </fieldset>

        </form>

       

      </div> <!-- end login -->
      <div class="bottom">  
      <h1><a href="../index.php">BACK TO HOMEPAGE</a></h1>
    </div>

  </div>
  
  
</body>
</html>
