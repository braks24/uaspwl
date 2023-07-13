<?php include "koneksi.php"?>
<form action="pinjaman.php" method="POST">
<pre>
No. Pinjaman  :<input type="text" name="nopin"/><br>
No. Anggota   :<input type="text" name="no"/><br>
Tanggal       :<input type="date" name="tgl"/><br>
Nominal       :<input type="text" name="nominal"/><br>
Tenor         :<input type="box" name="tenor"/><br>
</pre>
<input type="submit" name="sub" value="simpan"/>
</form>
<a href="anggota.php">Kembali</a>
<?php
if(isset($_POST['sub'])) {
    $no_pinjaman=$_POST['nopin'];
    $no_anggota=$_POST['n0'];
    $tgl=$_POST['tgl'];
    $nominal=$_POST['nominal'];
    $tenor=$_POST['tenor'];
    mysqli_query($koneksi, "insert into anggota values('$no_pinjaman','$no_anggota','$tgl','$nominal','$tenor')");
    echo"Data Berhasil di Simpan";
}
?>
<br><a href="tampil_data.php">Lihat Data</a><br>