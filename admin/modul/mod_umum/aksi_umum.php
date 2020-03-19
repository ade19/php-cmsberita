<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{

include "../../../config/koneksi.php";
include "../../../config/fungsi_seo.php";
include "../../../config/library.php";

$module=$_GET['module'];
$act=$_GET['act'];

// Hapus umum
if ($module=='umum' AND $act=='hapus'){
  mysql_query("DELETE FROM umum WHERE id_umum='$_GET[id]'");
  header('location:../../media.php?module='.$module);
}

// Input umum
elseif ($module=='umum' AND $act=='input'){  
  mysql_query("INSERT INTO umum (id_umum,
								 pengumuman,
								 isi_pengumuman,
								 tgl,
								 pengirim)
								 VALUES('$_POST[id_umum]',
										'$_POST[pengumuman]',
										'$_POST[isi_pengumuman]',
										'$_POST[tgl]',
										'$_POST[pengirim]')");
  header('location:../../media.php?module='.$module);
}

// Update umum
elseif ($module=='umum' AND $act=='update'){

  mysql_query("UPDATE umum SET pengumuman        = '$_POST[pengumuman]',
                                 isi_pengumuman  = '$_POST[isi_pengumuman]',
                                 tgl   = '$_POST[tgl]',  
                                 pengirim    = '$_POST[pengirim]'  
                           WHERE id_umum   = '$_POST[id]'");
  header('location:../../media.php?module='.$module);
}
}
?>
