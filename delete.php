<?php
include 'koneksi.php';
$no_anggota=$_GET['n'];
mysqli_query($koneksi,"delete from anggota where no_anggota'$no_anggota'");
echo"Data Berhasil Dihapus \n";
echo"<br><a href='tampil_data.php'>Tampil Data</a></br>";
?>