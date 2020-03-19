<?php
include "../config/koneksi.php";
// Apabila password tidak diubah
if (empty($_POST[password])) {
mysql_query("UPDATE user SET id_user='$_POST[id_user]',
nama_lengkap='$_POST[nama_lengkap]',
email='$_POST[email]',level='$_POST[level]'
WHERE id_user='$_POST[id]'");
}
// Apabila password diubah
else{
$pass=md5($_POST[password]);
mysql_query("UPDATE user SET id_user='$_POST[id_user]',
password='$pass',
nama_lengkap='$_POST[nama_lengkap]',
email='$_POST[email]',level='$_POST[level]'
WHERE id_user='$_POST[id]'");
}
header('location:tampil_user.php');
?>