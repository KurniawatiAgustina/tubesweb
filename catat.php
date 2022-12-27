<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Budgeting</title>
    <link rel="stylesheet" href="../css/catat.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@500;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="container">
      <div class="sidebar">
        <a href="../admin.php">Home</a>
        <!-- <a href="#">Categories</a> -->
        <a href="../catat/catat.php">Catat Transaksi</a>
        <a href="../budget/catat.php">Budgeting</a>
      </div>
      <div class="right_content">
        <div class="navbar">
          <img src="images/logo.png" alt="" />
          <button class="btn">
            <a href="../logout.php">Logout</a>
          </button>
        </div>
        <div class="content">
          <h3>Transaksi</h3>
          <button type="button" class="btn btn-tambah" style="margin-top: 80px">
            <a href="catat-entry.html">Tambah Data</a>
          </button>
          <table class="table-data">
            <thead>
              <tr>
                <th style="width: 20%">Tanggal</th>
                <th>Wishlist</th>
                <th style="width: 10%">Pemasukan</th>
                <th style="width: 20%">Tabungan</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
                  include '../koneksi.php';
                  $sql = "SELECT * FROM tb_budget";
                  $result = mysqli_query($koneksi, $sql);
                  while ($data = mysqli_fetch_assoc($result)) {
                      echo "
                    <tr>
                      <td>$data[tanggal]</td>
                      <td>$data[wishlist]</td>
                      <td>$data[pemasukan]</td>
                      <td>$data[tabungan]</td>
                      <td><a href=catat-edit.php?id=$data[id]>Edit</a> | 
                      <a href=catat-hapus.php?id=$data[id]>Hapus</a></td>
                    </tr>
                    ";
                  }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>