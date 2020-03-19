<?php
include "../config/koneksi.php";
if ($_SESSION['level']=='admin'){
$sql=mysql_query("SELECT * FROM modul ORDER BY urutan");
}
else{
$sql=mysql_query("SELECT * FROM modul
WHERE status='user' ORDER BY urutan");
}
while ($data=mysql_fetch_array($sql)){
echo "<li><a href='$data[link]'>
&#187; $data[nama_modul]</a></li>";
}
?>