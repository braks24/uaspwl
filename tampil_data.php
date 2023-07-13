<?php
include "koneksi.php";
$result=mysqli_query($koneksi,"select*from anggota");
echo"<a href='anggota.php'>Tambah Data</a>";
echo"<table border=1>";
echo"<tr>
<th>No. Anggota</th><th>Nama</th><th>Alamat</th><th>No. Hp</th><th>Tanggal</th>";
while($r=mysqli_fetch_array($result)) {
    echo"<tr><td>".$r['no_anggota']."</td>";
    echo"<td>".$r['nama']."</td>";
    echo"<td>".$r['alamat']."</td>";
    echo"<td>".$r['no_hp']."</td>";
    echo"<td>".$r['tgl_bergabung']."</td>";
    echo"<td><a href='update.php?n=".$r['no_anggota']."'>Ubah</a>";
    echo"<td><a href='delete.php?n=".$r['no_anggota']."'>Hapus</a>";
    echo"</td><tr>";
}
    echo"</table>";
?>