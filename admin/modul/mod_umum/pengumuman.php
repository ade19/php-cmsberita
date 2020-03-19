<?php
//session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
$aksi="modul/mod_umum/aksi_umum.php";
switch(@$_GET['act']){
  // Tampil Agenda
  default:
    echo "<h2>Pengumuman</h2>
          <input type=button value='Tambah Umum' onclick=location.href='?module=umum&act=tambahumum'>
          <table class='list'><thead>
          <tr>
          <th>no</th>
          <th>pengumuman</th>
          <th>tgl. Pengumuman</th>
          <th>aksi</th>
          </tr></thead><tbody>";
		  
    if ($_SESSION['level']=='admin'){
      $tampil=mysql_query("SELECT * FROM umum ORDER BY id_umum DESC");
    }
    else{
      $tampil=mysql_query("SELECT * FROM umum ORDER BY id_umum DESC");
    }

    $no=1;
    while ($r=mysql_fetch_array($tampil)){
      echo "<tr><td class='left' width='25'>$no</td>
              <td class='left' width=220>$r[pengumuman]</td>
                <td class='left'>$r[tgl]</td>
                <td class='center'  width='85'><a href=?module=umum&act=editumum&id=$r[id_umum]><img src='images/edit.png' border='0' title='edit' /></a>
	                  <a href=$aksi?module=umum&act=hapus&id=$r[id_umum]><img src='images/del.png' border='0' title='hapus' /></a>
		        </tr>";
      $no++;
    }
    echo "</tbody></table>";

    if ($_SESSION['level']=='admin'){
      $jmldata = mysql_num_rows(mysql_query("SELECT * FROM umum"));
    }
    else{
      $jmldata = mysql_num_rows(mysql_query("SELECT * FROM umum"));
    }  
    break;

  
  case "tambahumum":
    echo "<h2>Tambah Pengumuman</h2>
          <form method=POST action='$aksi?module=umum&act=input'>
          <table class='list'><tbody>
		  <input type=hidden name='id_umum'>
          <tr><td class='left'>Pengumuman</td> <td> : <input type=text name='pengumuman' size=60></td></tr>
          <tr><td class='left'>Isi Pengumuman</td>  <td> : <textarea name='isi_pengumuman' style='width: 400px; height: 150px;'></textarea></td></tr>
          <tr><td class='left'>Tgl</td><td> : <input type=date name='tgl' size=40></td></tr>
          <tr><td class='left'>Pengirim</td>    <td> : <input type=text name='pengirim' size=40></td></tr>
          <tr><td class='left' colspan=2><input type=submit value=Simpan>
          <input type=button value=Batal onclick=self.history.back()></td></tr>
          </tbody></table></form>";
    break;
  

  case "editumum":
    if ($_SESSION['level']=='admin'){
      $edit = mysql_query("SELECT * FROM umum WHERE id_umum='$_GET[id]'");
    }
    else{
      $edit = mysql_query("SELECT * FROM umum WHERE id_umum='$_GET[id]' AND username='$_SESSION[namauser]'");
    }
    
    $r    = mysql_fetch_array($edit);

    echo "<h2>Edit Pengumuman</h2>
          <form method=POST action=$aksi?module=umum&act=update>
          <input type=hidden name=id value=$r[id_umum]>
          <table class='list'><tbody>
          <tr><td class='left'>Pengumuman</td>      <td> : <input type=text name='pengumuman' size=60 value='$r[pengumuman]'></td></tr>
          <tr><td class='left'>Isi Pengumuman</td>  <td> <textarea name='isi_pengumuman' id='loko' style='width: 490px; height: 150px;'>$r[isi_pengumuman]</textarea></td></tr>
          <tr><td class='left'>Tgl</td><td> : <input type=date name='tgl' size=40 value='$r[tgl]'></td></tr>";    

    echo "</td></tr>
          <tr><td class='left'>Pengirim</td>    <td> : <input type=text name='pengirim' size=40 value='$r[pengirim]'></td></tr>
          <tr><td class='left' colspan=2><input type=submit value=Update>
                            <input type=button value=Batal onclick=self.history.back()></td></tr>
          </tbody></table></form>";
    break;  
}
}
?>
