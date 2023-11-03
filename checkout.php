<?php   
session_start(); 

if(isset($_SESSION["guest"]))
	{
    $guest = $_SESSION["guest"];
				$curdate=date("Y/m/d");
				include ('db.php');
				
				
				$sql ="SELECT * from pesan where email = '$guest'";
				$re = mysqli_query($koneksi,$sql);
				while($row=mysqli_fetch_array($re))
				{
					$nama = $row['nama'];
					$email = $row['email'];
					$nomor = $row['nomor'];
					$tanggal = $row['tanggal'];
          $harga = 32;
           
					$menu1 = $row['menu1'];
          $menu2 = $row['menu2'];
          $menu3= $row['menu3'];
          $menu4 = $row['menu4'];
          $menu5 = $row['menu5'];
          $menu6 = $row['menu6'];
          $total = ($menu1 + $menu2 + $menu3 + $menu4 + $menu5 + $menu6) * $harga;
					$note = $row['note'];
					$bayar = $row['bayar'];	
				}			
	}
else {
  header("location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="container mt-5 mb-5">
      <div class="d-flex justify-content-center row">
        <div class="col-md-8">
          <div class="p-2">
            <h4>Pesanan anda:</h4>
            <div class="d-flex flex-row align-items-center pull-right">
              <span class="mr-1">Mohon cek kembali pesanan anda</span
              ><i class="fa fa-angle-down"></i>
            </div>
          </div>
          <div
            class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded"
          >
            <div class="mr-1">
              <img class="rounded" src="img/kenyang1.jpg" width="70" />
            </div>
            <div class="d-flex flex-column align-items-center product-details">
              <span class="font-weight-bold">Kenyang 1</span>
              <div class="d-flex flex-row product-desc">
                <div class="size mr-1">
                  <span class="text-grey">Harga : </span
                  ><span class="font-weight-bold">&nbsp;32rb</span>
                </div>
              </div>
            </div>
            <div class="d-flex flex-row align-items-center qty">
              <i class="fa fa-minus text-danger"></i>
              <h5 class="text-grey mt-1 mr-1 ml-1"><?php echo  $menu1; ?></h5>
              <i class="fa fa-plus text-success"></i>
            </div>
            <div>
              <h5 class="text-grey">Rp. <?php echo  $menu1 * $harga; ?>.000</h5>
            </div>
            <div class="d-flex align-items-center">
              <i class="fa fa-trash mb-1 text-danger"></i>
            </div>
          </div>
          <div
            class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded"
          >
            <div class="mr-1">
              <img class="rounded" src="img/kenyang2.jpg" width="70" />
            </div>
            <div class="d-flex flex-column align-items-center product-details">
              <span class="font-weight-bold">Kenyang 2</span>
              <div class="d-flex flex-row product-desc">
                <div class="size mr-1">
                  <span class="text-grey">Harga :</span
                  ><span class="font-weight-bold">&nbsp;32 rb</span>
                </div>
              </div>
            </div>
            <div class="d-flex flex-row align-items-center qty">
              <i class="fa fa-minus text-danger"></i>
              <h5 class="text-grey mt-1 mr-1 ml-1"><?php echo  $menu2; ?></h5>
              <i class="fa fa-plus text-success"></i>
            </div>
            <div>
              <h5 class="text-grey">Rp. <?php echo  $menu2 * $harga; ?>.000</h5>
            </div>
            <div class="d-flex align-items-center">
              <i class="fa fa-trash mb-1 text-danger"></i>
            </div>
          </div>
          <div
            class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded"
          >
            <div class="mr-1">
              <img class="rounded" src="img/kenyang3.jpg" width="70" />
            </div>
            <div class="d-flex flex-column align-items-center product-details">
              <span class="font-weight-bold">Kenyang 3</span>
              <div class="d-flex flex-row product-desc">
                <div class="size mr-1">
                  <span class="text-grey">Harga : </span
                  ><span class="font-weight-bold">&nbsp;32 rb</span>
                </div>
              </div>
            </div>
            <div class="d-flex flex-row align-items-center qty">
              <i class="fa fa-minus text-danger"></i>
              <h5 class="text-grey mt-1 mr-1 ml-1"><?php echo  $menu3; ?></h5>
              <i class="fa fa-plus text-success"></i>
            </div>
            <div>
              <h5 class="text-grey">Rp. <?php echo  $menu3 * $harga; ?>.000</h5>
            </div>
            <div class="d-flex align-items-center">
              <i class="fa fa-trash mb-1 text-danger"></i>
            </div>
          </div>
          <div
            class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded"
          >
            <div class="mr-1">
              <img class="rounded" src="img/kenyang6.jpg" width="70" />
            </div>
            <div class="d-flex flex-column align-items-center product-details">
              <span class="font-weight-bold">Kenyang 4</span>
              <div class="d-flex flex-row product-desc">
                <div class="size mr-1">
                  <span class="text-grey">Harga :</span
                  ><span class="font-weight-bold">&nbsp;32 rb</span>
                </div>
              </div>
            </div>
            <div class="d-flex flex-row align-items-center qty">
              <i class="fa fa-minus text-danger"></i>
              <h5 class="text-grey mt-1 mr-1 ml-1"><?php echo  $menu4; ?></h5>
              <i class="fa fa-plus text-success"></i>
            </div>
            <div>
              <h5 class="text-grey">Rp. <?php echo  $menu4 * $harga; ?>.000</h5>
            </div>
            <div class="d-flex align-items-center">
              <i class="fa fa-trash mb-1 text-danger"></i>
            </div>
          </div>
          <div
            class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded"
          >
            <div class="mr-1">
              <img class="rounded" src="img/kenyang4.jpg" width="70" />
            </div>
            <div class="d-flex flex-column align-items-center product-details">
              <span class="font-weight-bold">Kenyang 5</span>
              <div class="d-flex flex-row product-desc">
                <div class="size mr-1">
                  <span class="text-grey">Harga :</span
                  ><span class="font-weight-bold">&nbsp;32 rb</span>
                </div>
              </div>
            </div>
            <div class="d-flex flex-row align-items-center qty">
              <i class="fa fa-minus text-danger"></i>
              <h5 class="text-grey mt-1 mr-1 ml-1"><?php echo  $menu5; ?></h5>
              <i class="fa fa-plus text-success"></i>
            </div>
            <div>
              <h5 class="text-grey">Rp. <?php echo  $menu5 * $harga; ?>.000</h5>
            </div>
            <div class="d-flex align-items-center">
              <i class="fa fa-trash mb-1 text-danger"></i>
            </div>
          </div>
          <div
            class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded"
          >
            <div class="mr-1">
              <img class="rounded" src="img/kenyang5.jpg" width="70" />
            </div>
            <div class="d-flex flex-column align-items-center product-details">
              <span class="font-weight-bold">Kenyang 6</span>
              <div class="d-flex flex-row product-desc">
                <div class="size mr-1">
                  <span class="text-grey">Harga :</span
                  ><span class="font-weight-bold">&nbsp;32 rb</span>
                </div>
              </div>
            </div>
            <div class="d-flex flex-row align-items-center qty">
              <i class="fa fa-minus text-danger"></i>
              <h5 class="text-grey mt-1 mr-1 ml-1"><?php echo  $menu6; ?></h5>
              <i class="fa fa-plus text-success"></i>
            </div>
            <div>
              <h5 class="text-grey">Rp. <?php echo  $menu6 * $harga; ?>.000</h5>
            </div>
            <div class="d-flex align-items-center">
              <i class="fa fa-trash mb-1 text-danger"></i>
            </div>
          </div>
         <div class="line-1"></div>
          <div
            class="d-flex flex-row justify-content-between align-items-center p-3 bg-white mt-4 px-3 rounded"
          >
            <h5>Total:</h5>
            <h5
              class="text-danger"
              style="font-weight: bold; padding-left: 85px"
            >
            Rp. <?php echo  $total; ?>.000
            </h5>
          </div>
          <div
            class="d-flex flex-row align-items-center mt-3 p-2 bg-white rounded"
          >
            <button
              style="margin-left: 40%"
              type="button"
              class="btn btn-warning"
              data-toggle="modal"
              data-target="#form"
            >
              Bayar
            </button>
            <div
              class="modal fade"
              id="form"
              tabindex="-1"
              role="dialog"
              aria-labelledby="exampleModalLabel"
              aria-hidden="true"
            >
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content py-md-5 px-md-4 p-sm-3 p-4">
                  <h4>Silahkan scan QRIS dibawah ini</h4>
                  <img class="m-auto" src="img/qris.jpg" alt="" width="80%" />
                  <button
                    onclick="myFunction()"
                    type="button"
                    class="btn btn-warning"
                    data-toggle="modal"
                    data-target="#form"
                  >
                    Konfirmasi Pembayaran
                  </button>
                  <script>
                    function myFunction() {
                      window.alert("Pembayaran Berhasil");
                      window.location="./index.php"
                    }
                  </script>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script
    src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"
  ></script>
</html>
