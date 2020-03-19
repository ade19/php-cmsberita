<?php
//session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
$aksi="modul/mod_hubungi/aksi_hubungi.php";
switch(@$_GET['act']){
  // Tampil Hubungi Kami
  default:
    echo "<h2>Hubungi Kami</h2>
          <div id=paging>
          #Ingin Balas klik email. !
          </div>
          <table class='list'><thead>
          <tr><th class='left'>no</th>
          <th>nama</th>
          <th>email</th>
          <th>subjek</th>
          <th>tanggal</th>
          <th>aksi</th></tr></thead><tbody>";

    $tampil=mysql_query("SELECT * FROM hubungi ORDER BY id_hubungi DESC");

    $no = 1;
    while ($r=mysql_fetch_array($tampil)){
      $tgl=date("y-m-d");
      echo "<tr><td class='left' width='25'>$no</td>
                <td class='left'>$r[nama]</td>
                <td class='left'><a href=?module=hubungi&act=balasemail&id=$r[id_hubungi]>$r[email]</a></td>
                <td class='left'>$r[subjek]</td>
                <td class='left'>$tgl</a></td>
                <td class='center' width='50'><a href=$aksi?module=hubungi&act=hapus&id=$r[id_hubungi]><img src='images/del.png' border='0' title='hapus' /></a>
                </td></tr>";
    $no++;
    }
    echo "</tbody></table>";
    $jmldata=mysql_num_rows(mysql_query("SELECT * FROM hubungi"));
    break;

  case "balasemail":
    $tampil = mysql_query("SELECT * FROM hubungi WHERE id_hubungi='$_GET[id]'");
    $r      = mysql_fetch_array($tampil);

    echo "<h2>Reply Email</h2>
          <form method=POST action='?module=hubungi&act=kirimemail'>
          <table class='list'><tbody>
          <tr><td class='left'>Kepada</td><td class='left'> : <input type=text name='email' size=73 value='$r[email]'></td></tr>
          <tr><td class='left'>Subjek</td><td class='left'> : <input type=text name='subjek' size=73 value='Re: $r[subjek]'></td></tr>
          <tr><td class='left'>Pesan</td><td class='left'> <textarea name='pesan' id='loko' style='width: 470px; height: 180px;'><br><br><br><br>     
  ---------------------------------------------------------------------------------------------------------------------
  $r[pesan]</textarea></td></tr>
          <tr><td class='left' colspan=2><input type=submit value=Kirim>
                            <input type=button value=Batal onclick=self.history.back()></td></tr>
          </tbody></table></form>";
     break;
    
  case "kirimemail":
    mail($_POST['email'],$_POST['subjek'],$_POST['pesan'],"From: ade@gmail.com");
    echo "<h2>Status Email</h2>
          <p>Email telah sukses terkirim ke tujuan</p>
          <p>[ <a href=javascript:history.go(-2)>Kembali</a> ]</p>";	 		  
    break;  
}
}
?>
