<?php
include "../config/koneksi.php";
// Enkripsi password sebelum disimpan di database
$user=$_GET['id_user'];
$pass=md5($_GET['password']);
$nama=$_GET['nama_lengkap'];
$email=$_GET['email'];
$level=$_GET['level'];

$query="INSERT INTO user(id_user,
password,
nama_lengkap,
email,level) VALUES
('$user','$pass','$nama','$email','$level')";
$hasil=mysql_query($query);

if ($hasil){
header('location:tampil_user.php');
}else{
	echo"Haduh gagal data tersimpan bro :(";
}
?>