<?php
include('../koneksi.php');
require_once("../dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$query = mysqli_query($koneksi, "select * from tb_catat");
$html = '<center><h3>Laporan Keuangan</h3></center><hr/><br><br>';
$html .= '<table border="1" width="100%">
<tr>
<th>No</th>
<th>Tanggal</th>
<th>Nama</th>
<th>Wishlist</th>
<th>Pemasukan</th>
</tr>';
$no = 1;
while ($row = mysqli_fetch_array($query)) {
$html .= "<tr>
<td>" . $no . "</td>
<td>" . $row['tanggal'] . "</td>
<td>" . $row['wishlist'] . "</td>
<td>" . $row['pemasukan'] . "</td>
<td>" . $row['tabungan'] . "</td>
</tr>";
$no++;
}
$html .= "</html>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('laporan-categories.pdf');