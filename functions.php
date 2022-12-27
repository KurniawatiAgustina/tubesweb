<?php
$conn=mysqli_connect("localhost","root","","id20018032_danaku");
if(!$conn){
    die('Koneksi Error : '.mysqli_connect_errno().' - '.mysqli_connect_error());
}
    function query($query_kedua){
        global $conn;
        $result=mysqli_query($conn,$query_kedua);
        $rows=[];
        while($row=mysqli_fetch_assoc($result)){
            $rows[]=$row;
        }
        return $rows;
    }
    

function cari($keyword)
{
    $sql ="SELECT * FROM tb_catat
    WHERE 
    tanggal LIKE '%$keyword%' OR
    pemasukan LIKE '%$keyword%' OR
    pengeluaran LIKE '%$keyword%' OR
    keterangan  LIKE '%$keyword%'";

    return query($sql);
}
?>