<?php
include "../config/koneksi.php";
// Bagian Home
if ($_GET['module']=='home'){
echo "<h2>Selamat Datang</h2>
<p>Hai <b>$_SESSION[namauser]</b>,
silahkan klik menu pilihan yang berada
di sebelah kiri untuk mengelola content website.</p>
<p>&nbsp;</p> // membuat baris baru yg kosong
<p>&nbsp;</p>
<p>&nbsp;</p>
<p align=right>Login Hari ini: ";
include "tgl_indo2.php";
echo "</p>";
}
?>