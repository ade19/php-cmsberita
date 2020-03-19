<?php
//session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
$aksi="modul/mod_agenda/aksi_agenda.php";
switch(@$_GET['act']){
  // Tampil Agenda
  default:
    echo "<h2>Agenda</h2>
          <input type=button value='Tambah Agenda' onclick=location.href='?module=agenda&act=tambahagenda'>
          <table class='list'><thead>
          <tr>
          <th>no</th>
          <th>tema</th>
          <th>tgl. mulai</th>
          <th>tgl. selesai</th>
          <th>aksi</th>
          </tr></thead><tbody>";
		  
    if ($_SESSION['level']=='user'){
      $tampil=mysql_query("SELECT * FROM agenda ORDER BY id_agenda DESC");
    }
    else{
      $tampil=mysql_query("SELECT * FROM agenda 
                           WHERE username='$_SESSION[namauser]'       
                           ORDER BY id_agenda DESC");
    }

    $no=1;
    while ($r=mysql_fetch_array($tampil)){
      echo "<tr><td class='left' width='25'>$no</td>
                <td class='left' width=220>$r[tema]</td>
                <td class='left'>$r[tgl_mulai]</td>
                <td class='left'>$r[tgl_selesai]</td>
                <td class='center'  width='85'><a href=?module=agenda&act=editagenda&id=$r[id_agenda]><img src='images/edit.png' border='0' title='edit' /></a>
	                  <a href=$aksi?module=agenda&act=hapus&id=$r[id_agenda]><img src='images/del.png' border='0' title='hapus' /></a>
		        </tr>";
      $no++;
    }
    echo "</tbody></table>";

    if ($_SESSION['level']=='admin'){
      $jmldata = mysql_num_rows(mysql_query("SELECT * FROM agenda"));
    }
    else{
      $jmldata = mysql_num_rows(mysql_query("SELECT * FROM agenda WHERE username='$_SESSION[namauser]'"));
    }  
    break;

  
  case "tambahagenda":
    echo "<h2>Tambah Agenda</h2>
          <form method=POST action='$aksi?module=agenda&act=input'>
          <table class='list'><tbody>
          <tr><td class='left'>Tema</td>      <td> : <input type=text name='tema' size=60></td></tr>
          <tr><td class='left'>Isi Agenda</td>  <td> <textarea name='isi_agenda' id='loko' style='width: 490px; height: 150px;'></textarea></td></tr>
          <tr><td class='left'>Tempat</td>    <td> : <input type=text name='tempat' size=40></td></tr>
          <tr><td class='left'>Pukul</td>    <td> : <input type=time name='jam' size=40></td></tr>
          <tr><td class='left'>Tgl Mulai</td><td> : <input type=date name='tgl_mulai' size=40></td></tr>       
          <tr><td class='left'>Tgl Selesai</td><td> : <input type=date name='tgl_selesai' size=40></td></tr> ";

    echo "</td></tr>
          <tr><td class='left'>Pengirim</td>    <td> : <input type=text name='pengirim' size=40></td></tr>
          <tr><td class='left' colspan=2><input type=submit value=Simpan>
          <input type=button value=Batal onclick=self.history.back()></td></tr>
          </tbody></table></form>";
    break;
  

  case "editagenda":
    if ($_SESSION['level']=='user'){
      $edit = mysql_query("SELECT * FROM agenda WHERE id_agenda='$_GET[id]'");
    }
    else{
      $edit = mysql_query("SELECT * FROM agenda WHERE id_agenda='$_GET[id]' AND username='$_SESSION[namauser]'");
    }
    
    $r    = mysql_fetch_array($edit);

    echo "<h2>Edit Agenda</h2>
          <form method=POST action=$aksi?module=agenda&act=update>
          <input type=hidden name=id value=$r[id_agenda]>
          <table class='list'><tbody>
          <tr><td class='left'>Tema</td>      <td> : <input type=text name='tema' size=60 value='$r[tema]'></td></tr>
          <tr><td class='left'>Isi Agenda</td>  <td> <textarea name='isi_agenda' id='loko' style='width: 490px; height: 150px;'>$r[isi_agenda]</textarea></td></tr>
          <tr><td class='left'Tempat</td>    <td> : <input type=text name='tempat' size=40 value='$r[tempat]'></td></tr>
          <tr><td class='left'>Pukul</td>    <td> : <input type=time name='jam' size=40 value='$r[jam]'></td></tr>
          <tr><td class='left'>Tgl Mulai</td><td> : <input type=date name='tgl_mulai' size=40 value='$r[tgl_mulai]'></td></tr>
          <tr><td class='left'>Tgl Selesai</td><td> : <input type=date name='tgl_selesai' size=40 value='$r[tgl_selesai]'></td></tr>";    

    echo "</td></tr>
          <tr><td class='left'>Pengirim</td>    <td> : <input type=text name='pengirim' size=40 value='$r[pengirim]'></td></tr>
          <tr><td class='left' colspan=2><input type=submit value=Update>
                            <input type=button value=Batal onclick=self.history.back()></td></tr>
          </tbody></table></form>";
    break;  
}
}
?>
