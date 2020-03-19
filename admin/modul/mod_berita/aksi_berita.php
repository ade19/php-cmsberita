<?php
session_start();
include "../../../config/koneksi.php";
include "../../../config/library.php";
include "../../../config/fungsi_thumb.php";

$module=$_GET['module'];
$act=$_GET['act'];

// Menghapus data
if($module=='berita' AND $act=='delete'){

	$hapus="Delete from berita where id_berita='$_GET[id]'";
    $hasil=mysql_query($hapus);
        if($hapus){
	        header('location:../../media.php?module='.$module);
	    }else{
	       echo"Data Gagal Dihapus";
	    }
       }
// Input Berita
elseif ($module=='berita' AND $act=='input'){
$lokasi_file = $_FILES['fupload']['tmp_name'];
$tipe_file      = $_FILES['fupload']['type'];
$nama_file = $_FILES['fupload']['name'];
$hari = date("w");
$tgl_skrg=date("y-m-d");
date_default_timezone_set('Asia/Jakarta');
$jam=date("H:i:s");
$seminggu = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
$hari = date("w");
$hari_ini = $seminggu[$hari];

  // Apabila ada gambar yang diupload
if (!empty($lokasi_file)){
	if ($tipe_file != "image/jpeg" AND $tipe_file != "image/pjpeg"){
    echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload bertipe *.JPG');
	window.location=('../../media.php?module=berita')</script>";
	}
	else{
		UploadImage($nama_file);
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
header('location:../../media.php?module='.$module);
}
}
// Apabila tidak ada gambar yang diupload
else{
mysql_query("INSERT INTO berita(judul,
id_kategori,
isi_berita,
gambar,
id_user,
jam,
tanggal,
hari)
VALUES('$_POST[judul]',
'$_POST[kategori]',
'$_POST[isi_berita]',
'$nama_file',
'$_SESSION[namauser]',
'$jam',
'$tgl_skrg',
'$hari_ini')");
}
  header('location:../../media.php?module='.$module);
  }

// Update berita
elseif ($module=='berita' AND $act=='update'){
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];

  // Apabila gambar tidak diganti
  if (empty($lokasi_file)) {
mysql_query("UPDATE berita SET judul='$_POST[judul]',
id_kategori='$_POST[kategori]',
isi_berita='$_POST[isi_berita]'
WHERE id_berita='$_POST[id]'");
}
// Apabila gambar diganti
else{
UploadImage($nama_file);
mysql_query("UPDATE berita SET judul='$_POST[judul]',
id_kategori='$_POST[kategori]',
isi_berita='$_POST[isi_berita]',
gambar='$nama_file'
WHERE id_berita='$_POST[id]'");
}
  header('location:../../media.php?module='.$module);
   }
?>
