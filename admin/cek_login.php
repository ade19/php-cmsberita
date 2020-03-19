<?php
include "../config/koneksi.php";
$user=$_POST['id_user'];
$pass=md5($_POST['password']);
$login=mysql_query("SELECT * FROM user
WHERE id_user='$user' AND password='$pass'");
$ketemu=mysql_num_rows($login);
$r=mysql_fetch_array($login);

// Apabila username dan password ditemukan (valid)
if ($ketemu > 0){
session_start(); // Untuk memulai session

// isi dari variabel session
$_SESSION['namauser']=$r['id_user'];
$_SESSION['passuser']=$r['password'];
$_SESSION['level']=$r['level'];
echo"BERHASIIIILLLLL";
header('location:media.php?module=home'); // Buka hal input berita
}
else{
echo("Login gagal! username & password tidak benar<BR>");
echo("<A HREF=form_login.php>Ulangi Lagi</A>");
}
?>