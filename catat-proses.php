<?php
include '../koneksi.php';
if(isset($_POST['simpan'])) {
    $tanggal = $_POST['tanggal'];
    $wishlist = $_POST['wishlist'];
    $pemasukan = $_POST['pemasukan'];
    $tabungan = $_POST['tabungan'];

    $sql = "INSERT INTO tb_budget (tanggal, wishlist, pemasukan, tabungan) VALUES('$tanggal', '$wishlist', '$pemasukan', '$tabungan')";

    if(empty($tanggal) || empty($wishlist) || empty($pemasukan) || empty($tabungan)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'catat-entry.html';
            </script>
        ";
    }elseif(mysqli_query($koneksi, $sql)) {
        echo "  
            <script>
                alert('Data Transaction Berhasil Ditambahkan');
                window.location = 'catat.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'catat-entry.html';
            </script>
        ";
    }
}elseif(isset($_POST['edit'])) {
    $id     = $_POST['id'];
    $tanggal   = $_POST['tanggal'];
    $wishlist  = $_POST['wishlist'];
    $pemasukan  = $_POST['pemasukan'];
    $tabungan= $_POST['tabungan'];

    $sql = "UPDATE tb_budget SET
            tanggal = '$tanggal', 
            wishlist = '$wishlist', 
            pemasukan = '$pemasukan', 
            tabungan = '$tabungan'
            WHERE id = $id";

    if(mysqli_query($koneksi, $sql)) {
        echo "
           // <script>
                alert('Data Transaction Berhasil Diubah');
                window.location = 'catat.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'catat-edit.php';
            </script>
        ";
    }
}elseif(isset($_POST['hapus'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM tb_budget WHERE id = $id";
    var_dump($sql);

    if(mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Transaction Berhasil Dihapus');
                window.location = 'catat.php';
            </script>
        ";
    }else {
        echo "
            <script>
                alert('Data Transaction Gagal Dihapus');
                window.location = 'catat.php'
            </script>
        ";
    }
}else {
    header('location: catat.php');
}

?>