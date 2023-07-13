<?php include "koneksi.php";
$no_anggota=$_POST['no'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$notelp=$_POST['telp'];
$tgl=$_POST['tgl'];
$q="update anggota set nama'$nama',alamat'$alamat',no_hp'$notelp',tgl_bergabung'$tgl'";
$q.="where no_anggota'$no_anggota'";
mysqli_query($koneksi,$q);
echo "Data Berhasil Dirubah";
?>
<br>
<a href="tampil_data.php">Tampil Data</a></br>