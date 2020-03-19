<?php
session_start();
include "../config/koneksi.php";
$module=$_GET['module'];
$act=$_GET['act'];
// Menghapus data
if($module=='user' AND $act=='delete'){

	$hapus="Delete from user where id_user='$_GET[id]'";
    $hasil=mysql_query($hapus);
        if($hapus){
	       header('location:media.php?module='.$module);
	    }else{
	       echo"Data Gagal Dihapus";
	    }
       }
// Input user
elseif ($module=='user' AND $act=='input'){
$pass=md5($_POST['password']);
mysql_query("INSERT INTO
user(id_user,password,nama_lengkap,email,level)
VALUES('$_POST[id_user]','$pass',
'$_POST[nama_lengkap]','$_POST[email]','$_POST[level]')");
header('location:media.php?module='.$module);
}
// Update user
elseif ($module=='user' AND $act=='update'){
// Apabila password tidak diubah
if (empty($_POST['password'])) {
mysql_query("UPDATE user SET id_user='$_POST[id_user]',
nama_lengkap='$_POST[nama_lengkap]',
email='$_POST[email]',level='$_POST[level]'
WHERE id_user='$_POST[id]'");
}
// Apabila password diubah
else{
$pass=md5($_POST['password']);
mysql_query("UPDATE user SET id_user='$_POST[id_user]',
password='$pass',
nama_lengkap='$_POST[nama_lengkap]',
email='$_POST[email]',level='$_POST[level]'
WHERE id_user='$_POST[id]'");
}
header('location:media.php?module='.$module);
}
?>