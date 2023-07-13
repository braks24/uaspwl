<?php include "koneksi.php"?>
<form action="anggota.php" method="POST">
<pre>
No.Anggota          :<input type="text" name="no"/><br>
Nama                :<input type="text" name="nama"/><br>
Alamat              :<input type="text" name="alamat"/><br>
No.Hp               :<input type="text" name="telp"/><br>
Tanggal Bergabung   :<input type="date" name="tgl"/><br>
</pre>
<input type="submit" name="sub" value="simpan"/>
</form>
<a href="pinjaman.php">Lanjut</a>
<?php
if(isset($_POST['sub'])) {
    $no_anggota=$_POST['no'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $notelp=$_POST['telp'];
    $tgl=$_POST['tgl'];
    mysqli_query($koneksi, "insert into anggota values('$no_anggota','$nama','$alamat','$notelp','$tgl')");
    echo"Data Berhasil di Simpan";
}
?>
<br><a href="tampil_data.php">Lihat Data</a><br>