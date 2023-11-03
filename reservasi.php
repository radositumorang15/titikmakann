<?php
session_start();

if(!isset($_SESSION["guest"]))
{
 header("location:index.php");
}

include ('db.php');
if(isset($_POST['submit'])) {
  $nama = $_POST['name'];
  $email = $_POST['email'];
  $nomor = $_POST['phone'];
  $tanggal = $_POST['date'];
  $mulai_jam = $_POST['startHour'];
  $mulai_menit = $_POST['startMinute'];
  $mulai = $mulai_jam . ':' . $mulai_menit;
  $habis_jam = $_POST['endHour'];
  $habis_menit = $_POST['endMinute'];
  $habis = $habis_jam . ':' . $habis_menit;
  $meja = $_POST['meja'];
  $menu1 = $_POST['snack1'];
  $menu2 = $_POST['snack2'];
  $menu3 = $_POST['snack3'];
  $menu4 = $_POST['snack4'];
  $menu5 = $_POST['snack5'];
  $menu6 = $_POST['snack6'];
  $note = $_POST['remark'];

  $query = "SELECT * FROM pesan WHERE meja = '$meja' AND tanggal = '$tanggal' AND waktu_mulai = '$mulai'";
  $result = $koneksi->query($query);
  
  if ($result->num_rows > 0) {
    echo "<script type='text/javascript'> alert('Meja Sudah Terpesan oleh orang lain !')</script>";;
  } else {
    $insertQuery = "INSERT INTO pesan (`nama`, `email`, `nomor`, `tanggal`, `waktu_mulai`, `waktu_selesai`, `meja`, `menu1`, `menu2`, `menu3`, `menu4`, `menu5`, `menu6`, `note`, `bayar`)
                  VALUES ('$nama' , '$email', '$nomor', '$tanggal', '$mulai', '$habis', '$meja', '$menu1', '$menu2', '$menu3', '$menu4', '$menu5', '$menu6', '$note', 0)";
    if ($koneksi->query($insertQuery) === TRUE) {
      echo "<script type='text/javascript'> alert('Berhasil Pesan!')</script>";
      header("location:checkout.php");

    } else {
      echo "<script type='text/javascript'> alert('Gagal Pesan!')</script>";
    }
  }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link href="css/signup.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />

    <link rel="shortcut icon" href="img/stiker titik makan.png" />

    <title>Reservasi Titik Makan</title>
  </head>

  <body class="container bg-light">
    <!-- Start Header form -->
    <div class="text-center pt-5">
      <img
        src="img/stiker titik makan.png"
        alt="network-logo"
        width="72"
        height="72"
      />
      <h2>Titik Makan Booking Form</h2>
      <p>Silahkan isi form dibawah untuk pemesanan</p>
    </div>
    <!-- End Header form -->

    <!-- Start Card -->
    <div class="card">
      <!-- Start Card Body -->
      <div class="card-body">
        <!-- Start Form -->
        <form
          id="bookingForm"
          action="#"
          method="POST"
          class="needs-validation"
          novalidate
          autocomplete="on"
          enctype="multipart/form-data"
        >
          <!-- Start Input Name -->
          <div class="form-group">
            <label for="inputName">Name</label>
            <input
              type="text"
              class="form-control"
              id="inputName"
              name="name"
              placeholder="Your name"
              required
            />
            <small class="form-text text-muted">Please fill your name</small>
          </div>
          <!-- End Input Name -->

          <!-- Start Input Email -->
          <div class="form-group">
            <label for="inputEmail">Email</label>
            <input
              type="email"
              class="form-control"
              id="inputEmail"
              name="email"
              placeholder="Enter email"
              pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
              required
            />
            <small class="form-text text-muted"
              >We'll never share your email with anyone else.</small
            >
          </div>
          <!-- End Input Email -->

          <!-- Start Input Telephone -->
          <div class="form-group">
            <label for="inputPhone">Phone</label>
            <input
              type="tel"
              class="form-control"
              id="inputPhone"
              name="phone"
              placeholder="08xxxxxxx"
              pattern="\d{3}\d{3}\d{4}"
              required
            />
            <small class="form-text text-muted"
              >We'll never share your phone number with anyone else.</small
            >
          </div>
          <!-- End Input Telephone -->

          <!-- Start Input Date , Start Time and End Time -->
          <div class="form-row">
            <!-- Start Input Date -->
            <div class="form-group col-md-4">
              <label for="inputDate">Date</label>
              <input
                type="date"
                class="form-control"
                id="inputDate"
                name="date"
                required
              />
              <small class="form-text text-muted"
                >Please choose date and time for meeting.</small
              >
            </div>
            <!-- End Input Date -->

            <!-- Start Input Start Time -->
            <div class="form-group col-md-4">
              <label>Start Time</label>
              <div
                class="d-flex flex-row justify-content-between align-items-center"
              >
                <select
                  class="form-control mr-1"
                  id="inputStartTimeHour"
                  name="startHour"
                  required
                >
                  <option value="" disabled selected>Hour</option>
                  <option value="08">08</option>
                  <option value="09">09</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                </select>
                <div class="pl-1 pr-2">:</div>
                <select
                  class="form-control"
                  id="inputStartTimeMinute"
                  name="startMinute"
                  required
                >
                  <option value="" disabled selected>Min</option>
                  <option value="00">00</option>
                  <option value="00">30</option>
                </select>
              </div>
            </div>
            <!-- End Input Start Time -->

            <!-- Start Input End Time -->
            <div class="form-group col-md-4">
              <label>End Time</label>
              <div
                class="d-flex flex-row justify-content-between align-items-center"
              >
                <select
                  class="form-control mr-1"
                  id="inputEndTimeHour"
                  name="endHour"
                  required
                >
                  <option value="" disabled selected>Hour</option>
                  <option value="09">09</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                </select>
                <div class="pl-1 pr-2">:</div>
                <select
                  class="form-control"
                  id="inputEndTimeMinute"
                  name="endMinute"
                  required
                >
                  <option value="" disabled selected>Min</option>
                  <option value="00">00</option>
                  <option value="00">30</option>
                </select>
              </div>
            </div>
            <!-- End Input End Time -->
          </div>
          <!-- End Input Date , Start Time and End Time -->

          <!-- Start Check Room Type -->
          <div class="form-group">
            <legend class="col-form-label pt-0">Reservasi Meja</legend>
            <div class="form-check form-check-inline">
              <input
                type="radio"
                class="form-check-input"
                id="inlineRadioType1"
                name="meja"
                value="type1"
                
              />
              <label class="form-check-label" for="inlineRadioType1"
                >Meja 1 (2 - 4 orang)</label
              >
            </div>
            <div class="form-check form-check-inline">
              <input
                type="radio"
                class="form-check-input"
                id="inlineRadioType2"
                name="meja"
                value="type2"
                
              />
              <label class="form-check-label" for="inlineRadioType2"
                >Meja 2 (2 - 4 orang)</label
              >
            </div>
            <div class="form-check form-check-inline">
              <input
                type="radio"
                class="form-check-input"
                id="inlineRadioType3"
                name="meja"
                value="type3"
                
              />
              <label class="form-check-label" for="inlineRadioType3"
                >Meja 3 (2 - 4 orang)</label
              >
            </div>
            <div class="form-check form-check-inline">
              <input
                type="radio"
                class="form-check-input"
                id="inlineRadioType4"
                name="meja"
                value="type4"
                
              />
              <label class="form-check-label" for="inlineRadioType4"
                >Meja 4 (2 - 4 orang)</label
              >
            </div>
          </div>
          <!-- End Check Room Type -->

          <hr />

          <!-- Start Check Snack Type -->
          <div class="form-row">
            <legend class="col-form-label pb-3">Snack and Drink</legend>
            <div class="row px-1">
              <div class="form-group col-lg-2 col-md-3 col-sm-4 col-6">
                <img
                  src="img/kenyang1.jpg"
                  alt="snack-box-set-1"
                  class="img-thumbnail"
                />
                <br />
                <label for=" inputSnack1">Kenyang 1</label>
                <input
                  type="number"
                  class="form-control"
                  id="inputSnack1"
                  name="snack1"
                  min="0"
                  max="4"
                />
                <small class="form-text text-muted">Nasgor Katsu</small>
              </div>
              <div class="form-group col-lg-2 col-md-3 col-sm-4 col-6">
                <img
                  src="img/kenyang2.jpg"
                  alt="snack-box-set-2"
                  class="img-thumbnail"
                />
                <br />
                <label for="inputSnack2">Kenyang 2</label>
                <input
                  type="number"
                  class="form-control"
                  id="inputSnack2"
                  name="snack2"
                  min="0"
                  max="4"
                />
                <small class="form-text text-muted">Spagheti Aglio olio</small>
              </div>
              <div class="form-group col-lg-2 col-md-3 col-sm-4 col-6">
                <img
                  src="img/kenyang3.jpg"
                  alt="snack-box-set-3"
                  class="img-thumbnail"
                />
                <br />
                <label for="inputSnack3">Kenyang 3</label>
                <input
                  type="number"
                  class="form-control"
                  id="inputSnack3"
                  name="snack3"
                  min="0"
                  max="4"
                />
                <small class="form-text text-muted">Nasi Katsu Matah</small>
              </div>
              <div class="form-group col-lg-2 col-md-3 col-sm-4 col-6">
                <img
                  src="img/kenyang6.jpg"
                  alt="snack-box-set-4"
                  class="img-thumbnail"
                />
                <br />
                <label for="inputSnack4">Kenyang 4</label>
                <input
                  type="number"
                  class="form-control"
                  id="inputSnack4"
                  name="snack4"
                  min="0"
                  max="4"
                />
                <small class="form-text text-muted">Nasgor Rendang</small>
              </div>
              <div class="form-group col-lg-2 col-md-3 col-sm-4 col-6">
                <img
                  src="img/kenyang4.jpg"
                  alt="snack-box-set-5"
                  class="img-thumbnail"
                />
                <br />
                <label for="inputSnack5">Kenyang 5</label>
                <input
                  type="number"
                  class="form-control"
                  id="inputSnack5"
                  name="snack5"
                  min="0"
                  max="4"
                />
                <small class="form-text text-muted">Nasi Ayam Teriyaki</small>
              </div>
              <div class="form-group col-lg-2 col-md-3 col-sm-4 col-6">
                <img
                  src="img/kenyang5.jpg"
                  alt="snack-box-set-6"
                  class="img-thumbnail"
                />
                <br />
                <label for="inputSnack5">Kenyang 6</label>
                <input
                  type="number"
                  class="form-control"
                  id="inputSnack6"
                  name="snack6"
                  min="0"
                  max="4"
                />
                <small class="form-text text-muted">Nasi Katsu Geprek</small>
              </div>
            </div>
          </div>
          <!-- End Check Snack Type -->

          <!-- Start Input Remark -->
          <div class="form-group">
            <label for="textAreaRemark">Notes</label>
            <textarea
              class="form-control"
              name="remark"
              id="textAreaRemark"
              rows="2"
              placeholder="Tell us you want more..."
            ></textarea>
          </div>
          <!-- End Input Remark -->

          <!-- Start Submit Button -->
          <button
            style="background-color: #f9b116"
            class="btn btn-block col-lg-2"
            type="submit"
            name="submit"
          >
            Submit
          </button>
          <!-- End Submit Button -->
        </form>
        <a href="index.php" 
            class="btn btn-danger btn-block col-lg-2"
            type="cancel"
            name="batal"
          >
            Batal Reservasi</a>
        <!-- End Form -->
      </div>
      <!-- End Card Body -->
    </div>
    <!-- End Card -->
    <footer>
      <div class="my-4 text-muted text-center">
        <p>Titik makan</p>
      </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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

    <!-- Start Scritp for Form -->
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function () {
        "use strict";
        window.addEventListener(
          "load",
          function () {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName("needs-validation");
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(
              forms,
              function (form) {
                form.addEventListener(
                  "submit",
                  function (event) {
                    if (form.checkValidity() === false) {
                      event.preventDefault();
                      event.stopPropagation();
                    }
                    form.classList.add("was-validated");
                  },
                  false
                );
              }
            );
          },
          false
        );
      })();
    </script>
    <!-- End Scritp for Form -->
  </body>
</html>