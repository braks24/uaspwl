<?php
include "koneksi.php";
$no_anggota=$_GET['n'];
$q=mysqli_query($koneksi,"select*from anggota where no_anggota'$no_anggota'");
$r=mysqli_fetch_array($q);
?>
<form action="baru.php" method="POST">
<pre>
    <input type="hidden" name="no" value="<?php echo $r['no'];?>"/><br>
    No.Anggota          :<input type="text" name="no" value="<?php echo $r['no'];?>"/><br>
    Nama                :<input type="text" name="nama" value="<?php echo $r['nama'];?>"/><br>
    Alamat              :<input type="text" name="alamat" value="<?php echo $r['alamat'];?>"/><br>
    No.Hp               :<input type="text" name="telp" value="<?php echo $r['telp'];?>"/><br>
    Tanggal Bergabung   :<input type="date" name="tgl" value="<?php echo $r['tgl'];?>"/><br>
</pre>
<input type="submit" name="sub" value="Ubah Data"/>
</form>
<a href="anggota.php">Kembali</a>