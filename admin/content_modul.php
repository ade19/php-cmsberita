<?php
include "../config/koneksi.php";
// Bagian Home
if ($_GET['module']=='home'){
echo "<h2>Selamat Datang</h2>
<p>Hai <b>$_SESSION[namauser]</b>,
silahkan klik menu pilihan yang berada
di sebelah kiri untuk mengelola content website. Ada beberapa Menu yang bisa anda akses, Semoga dengan website yang saya buat dapat
membantu Anda.</p><br><br>
<p>Terimakasih Atas kunjungan anda.. Jangan lupa kujungi : <a href :http://ademultimediaa.blogspot.com> http://ademultimediaa.blogspot.com</a></p>
<p align=right>Login Hari ini: ";
include "tgl_indo2.php";
}
// Bagian User
elseif ($_GET['module']=='user'){
	include"modul/mod_user/user.php";
}
//Bagian Modul
elseif ($_GET['module']=='modul'){
	include"modul/mod_modul/modul.php";
}
//Bagian Berita
elseif ($_GET['module']=='berita'){
    include "modul/mod_berita/berita.php";
}
//Bagian Banner
elseif ($_GET['module']=='banner'){
    include "modul/mod_banner/banner.php";
}
//Bagian Agenda
elseif ($_GET['module']=='agenda'){
    include "modul/mod_agenda/agenda.php";
}
//Bagian Hubungi
elseif ($_GET['module']=='hubungi'){
    include "modul/mod_hubungi/hubungi.php";
}
//Bagian Pengumuman
elseif ($_GET['module']=='umum'){
    include "modul/mod_umum/pengumuman.php";
}
//Bagian Profil
elseif ($_GET['module']=='profil'){
	echo"<h2>My Profil</h2>
	   <table border=20 align=center>
			<tr><th>NAMA</th><td> &nbsp&nbsp ADE SAPUTRA </td><th rowspan='10'>
			<img src='images/add.jpg' width='258' height='258' />
			</th></tr>
			<tr><th>NIM</th><td> &nbsp&nbsp 1655201018</td></tr>
			<tr><th>AGAMA</th><td> &nbsp&nbsp ISLAM</td></tr>
			<tr><th>JENIS KELAMIN</th><td> &nbsp&nbsp LAKI - LAKI</td></tr>
			<tr><th>TMPAT/TGL LAHIR</th><td> &nbsp&nbsp PEKANBARU, 19 - 07 - 1997</td></tr>
			<tr><th>ALAMAT</th><td> &nbsp&nbsp JL.TENGKU MAHARANI </td></tr>
			<tr><th>NO HP</th><td> &nbsp&nbsp 081270242882</td></tr>
			<tr><th>PRODI</th><td> &nbsp&nbsp TEKNIK INFORMATIKA</td></tr>
			<tr><th>FAKULTAS</th><td> &nbsp&nbsp ILMU KOMPUTER</td></tr>
			<tr><th>UNIVERSITAS</th><td> &nbsp&nbsp UNIVERSITAS LANCANG KUNING</td></tr>
	   </table>";
}
//Bagian Pengumuman
elseif ($_GET['module']=='download'){
  if ($_SESSION['level']=='admin'){
    include "modul/mod_download/download.php";
  }
}
// Bagian Album
elseif ($_GET['module']=='album'){
  if ($_SESSION['level']=='admin'){
    include "modul/mod_album/album.php";
  }
}
// Bagian Galeri Foto
elseif ($_GET['module']=='galerifoto'){
  if ($_SESSION['level']=='admin'){
    include "modul/mod_galerifoto/galerifoto.php";
  }
}
// Bagian Kata Jelek
elseif ($_GET['module']=='katajelek'){
  if ($_SESSION['level']=='admin'){
    include "modul/mod_katajelek/katajelek.php";
  }
}

// Bagian Sekilas Info
elseif ($_GET['module']=='sekilasinfo'){
  if ($_SESSION['level']=='admin'){
    include "modul/mod_sekilasinfo/sekilasinfo.php";
  }
}
// Bagian Komentar Berita
elseif ($_GET['module']=='komentar'){
  if ($_SESSION['level']=='admin'){
    include "modul/mod_komentar/komentar.php";
  }
}
// Bagian Menu Utama
elseif ($_GET['module']=='menuutama'){
  if ($_SESSION['level']=='admin'){
    include "modul/mod_menuutama/menuutama.php";
  }
}

// Bagian Sekilas Info
elseif ($_GET['module']=='sekilasinfo'){
  if ($_SESSION['level']=='admin'){
    include "modul/mod_sekilasinfo/sekilasinfo.php";
  }
}

// Apabila modul tidak ditemukan
else{
  echo "<p><b>MODUL BELUM ADA ATAU BELUM LENGKAP</b></p>";
}
?>