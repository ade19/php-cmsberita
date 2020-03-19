<?php
//session_start();
if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
      echo "<center>Untuk mengakses modul, Anda harus login <br>";
      echo "<a href=index.php><b>LOGIN</b></a></center>";
}
else{
include"../config/koneksi.php";
$aksi="modul/mod_berita/aksi_berita.php";	
switch (@$_GET['act']){
  // Tampil Berita
  default:	
  echo "<h2>Data Berita</h2>
		<input type=submit value='TAMBAH BERITA' 
		onclick=\"window.location.href='?module=berita&act=tambahberita';\">
		<table border=1>
		<tr><th>no</th>
		<th>Judul</th>
		<th>tgl.posting</th>
		<th colspan=2>Aksi</th></tr>";
		$no=1;
		$tgl_posting=date('d-m-y');
		$tampil = "Select * from berita order by id_berita asc";
		$hasil=mysql_query($tampil);
		$total=mysql_num_rows($hasil);
		while($r=mysql_fetch_array($hasil)){
		echo"<tr><td>$no</td><td>$r[judul]</td><td>$tgl_posting</td>
			<td class='center' width='85'><a href=?module=berita&act=editberita&id=$r[id_berita]><img src='images/edit.png' border='0' title='edit' /></a>
		                <a href=\"$aksi?module=berita&act=delete&id=$r[id_berita]&namafile=$r[gambar]\" onClick=\"return confirm('Apakah Anda benar-benar mau menghapusnya?')\"><img src='images/del.png' border='0' title='hapus' /></a></td></tr>";
			$no++;
		}
		echo"</table>";
        echo"<p align=left> <b>Total Jumlah Data = $total Berita</b></p>";
  break;
  case "tambahberita":
  echo"<h2>Tambah Berita</h2>
	  <form method=POST action='$aksi?module=berita&act=input'>
	  <table>
<tr><td>Judul</td>
<td> : <input type=text name=judul size=60></td></tr>
<tr><td>Kategori</td> <td> :
<select name=kategori>
<option value=0 selected>- Pilih Kategori -</option>";
$tampil=mysql_query("SELECT * FROM kategori ORDER BY nama_kategori");
            while($r=mysql_fetch_array($tampil)){
              echo "<option value=$r[id_kategori]>$r[nama_kategori]</option>";
            }
echo "</select></td></tr>
          <tr><td>Isi Berita</td>  <td> <textarea name='isi_berita' id='loko' style='width: 490px; height: 350px;'></textarea></td></tr>
          <tr><td>Gambar</td>      <td> : <input type=file name='fupload' size=40> 
                                          <br>Tipe gambar harus JPG/JPEG</td></tr>";
echo"
<tr><td colspan=2><input type=submit value=Simpan>
<input type=button value=Batal onclick=self.history.back()>
</td></tr>
</table>
</form>";

   break; 
   case "editberita":
   	$tampil="Select * from berita where id_berita='$_GET[id]'";
	$hasil=mysql_query($tampil);
	$r=mysql_fetch_array($hasil);
	
	    echo "<h2>Edit Berita</h2>
          <form method=POST enctype='multipart/form-data' action=$aksi?module=berita&act=update>
          <input type=hidden name=id value=$r[id_berita]>
          <table class='list'><tbody>
          <tr><td width=70>Judul</td>     <td> : <input type=text name=\"judul\" size=60 value=\"$r[judul]\"></td></tr>
          <tr><td>Kategori</td>  <td> : <select name='kategori'>";
 
          $tampil=mysql_query("SELECT * FROM kategori ORDER BY nama_kategori");
          if ($r['id_kategori']==0){
            echo "<option value=0 selected>- Pilih Kategori -</option>";
          }   

          while($w=mysql_fetch_array($tampil)){
            if ($r['id_kategori']==$w['id_kategori']){
              echo "<option value=$w[id_kategori] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[id_kategori]>$w[nama_kategori]</option>";
            }
          }

    echo "</select></td></tr>";
	
      echo "<tr><td>Isi Berita</td>   <td> <textarea id='isi_berita' name='isi_berita' style='width: 490px; height: 350px;'>$r[isi_berita]</textarea></td></tr>
                    <tr><td class='left'>Gambar</td><td class='left'>    : <img src='../foto_berita/$r[gambar]'></td></tr>
          <tr><td class='left'>Ganti Gbr</td><td class='left'> : <input type=file name='fupload' size=30> *)</td></tr>";

    echo  "<tr><td colspan=2><input type=submit value=Update>
                            <input type=button value=Batal onclick=self.history.back()></td></tr>
         </tbody></table></form>";
    break;
	}

}
?>