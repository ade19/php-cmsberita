<?php
session_start();
include "../config/koneksi.php";
include "../config/tgl_indo2.php";
include "../config/library.php";
$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file = $_FILES['fupload']['name'];
$seminggu = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
$hari = date("w");
$tgl_skrg=date("y-m-d");
date_default_timezone_set('Asia/Jakarta');
$jam=date("H:i:s");
$hari_ini = $seminggu[$hari];
// Apabila ada gambar yang diupload
if (!empty($lokasi_file)){
move_uploaded_file($lokasi_file,"foto_berita/$nama_file");
mysql_query("INSERT INTO berita(judul,
id_kategori,
isi_berita,
id_user,
jam,
tanggal,
hari,
gambar)
VALUES('$_POST[judul]',
'$_POST[kategori]',
'$_POST[isi_berita]',
'$_SESSION[namauser]',
'$jam',
'$tgl_skrg',
'$hari_ini',
'$nama_file')");
}
// Apabila tidak ada gambar yang diupload
else{
mysql_query("INSERT INTO berita(judul,
id_kategori,
isi_berita,
id_user,
jam,
tanggal,
hari)
VALUES('$_POST[judul]',
'$_POST[kategori]',
'$_POST[isi_berita]',
'$_SESSION[namauser]',
'$jam',
'$tgl_skrg',
'$hari_ini')");
}
header('location:tampil_berita.php');
?>