<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/catat.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@500;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body onload="myFunction()">
    <div class="container">
      <div class="sidebar">
        <a href="index.html">Home</a>
        <a href="catat/catat.php">Catat Transaksi</a>
        <a href="budget/catat.php">Budgeting</a>
      </div>
      <div class="right_content">
        <div class="navbar">
          <img src="images/logo.png" alt="" />
          <button class="btn"><a href="logout.php">Logout</a></button>
        </div>
        <div class="content">
          <h2 id="text"></h2>
          <p>
            <?php 
              echo "Selamat Datang di Halaman Admin, " . $_SESSION['nama'];
            ?>
          </p>
        </div>

      </div>
    </div>
    <script>
      function myFunction() {

        let jam = new Date().getHours();

        if (jam) {
          if (jam >= 4 && jam <= 10) {
            document.getElementById("text").innerHTML = `Selamat Pagi`;
          } else if (jam >= 11 && jam <= 14) {
            document.getElementById("text").innerHTML = `Selamat Siang`;
          } else if (jam >= 15 && jam <= 18) {
            document.getElementById("text").innerHTML = `Selamat Sore`;
          } else {
            document.getElementById("text").innerHTML = `Selamat Malam`;
          }
        }
      }
    </script>

  </body>
</html>
