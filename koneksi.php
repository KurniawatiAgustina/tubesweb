<?php 

$servername = '127.0.0.1';
$username = 'KurniawatiAgustina';
$password = 'kurniawati08';
$database = 'id20018032_danaku';

// membuat koneksi
$koneksi = mysqli_connect($servername, $username, $password, $database);

// mengecek koneksi
if(!$koneksi) {
    die('Connection Failed:' . mysqli_connect_error());
}
 ?>