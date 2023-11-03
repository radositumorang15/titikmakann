<?php  
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
}

include('db.php');

if (isset($_GET['delete_id'])) {
  $id = $_GET['delete_id'];
  $sql = "DELETE FROM pesan WHERE id = '$id'";
  $result = mysqli_query($koneksi, $sql);
  if ($result) {
    echo '<script>alert("Data berhasil dihapus");</script>';
  } else {
    echo '<script>alert("Gagal menghapus data");</script>';
  }
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    
    <link rel="shortcut icon" href="img/stiker titik makan.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link href="style2.css" rel="stylesheet" />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />
</head>
<body>
    <!--Main Navigation-->
    <div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Admin</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="../index.php" class="nav-link align-middle px-0">
                        <i class="fas fa-home"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="main.php" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
                        <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                            <li class="w-100">
                            <a href="adminlogin.php"><i class="fas fa-sign-out-alt"></i> <span class="d-none d-sm-inline">Logout</span></a>
                            </li>
            </div>
        </div>
        <div class="col py-3">
        <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Nomor</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Start time</th>
      <th scope="col">End Time</th>
      <th scope="col">Meja</th>
      <th scope="col">Makanan</th>
      <th scope="col">Notes</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  <?php
    include ('db.php');
    $sql="select * from pesan";
    $re = mysqli_query($koneksi,$sql);
    while($row = mysqli_fetch_array($re))
    {
    
      $id = $row['id'];
      
      if($id % 2 ==1 )
      {
        echo
        "<tr>
          <td>".$row['nama']."</td>
          <td>".$row['email']."</td>
          <td>(+62)".$row['nomor']."</td>
          <td>".$row['tanggal']."</td>
          <td>".$row['waktu_mulai']."</td>
          <td>".$row['waktu_selesai']."</td>
          <td>".$row['meja']."</td>
          <td>Menu 1 : ".$row['menu1']." <br>
              Menu 2 : ".$row['menu2']." <br>
              Menu 3 : ".$row['menu3']." <br>
              Menu 4 : ".$row['menu4']." <br>
              Menu 5 : ".$row['menu5']." <br>
              Menu 6 : ".$row['menu6']."
              </td>
          <td>".$row['note']."</td>
          <td class='table-action text-center'>
                    <a href='?delete_id=" . $id . "' class='action-icon'>
                        <i class='fas fa-trash-alt'></i>
                    </a>
                </td>
            </tr>";
      }
    }
    ?>
  </tbody>
</table>


        </div>
    </div>
</div>
<!--Main layout-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>