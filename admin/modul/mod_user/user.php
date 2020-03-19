<?php
//session_start();
if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
      echo "<center>Untuk mengakses modul, Anda harus login <br>";
      echo "<a href=index.php><b>LOGIN</b></a></center>";
}
else{
include"../config/koneksi.php";
$aksi="aksi.php";	
switch (@$_GET['act']){
  // Tampil User
  default:	
  echo "<h2>Data User</h2>
		<input type=submit value='TAMBAH DATA' 
		onclick=\"window.location.href='?module=user&act=tambahuser';\">
		<table border=1>
		<tr><th>No</th><th>Username</th><th>Nama Lengkap</th><th>Email</th>
		<th>Level</th><th colspan=2>Aksi</th></tr>";
		$no=1;
		$tampil = "Select * from user order by id_user asc";
		$hasil=mysql_query($tampil);
		$total=mysql_num_rows($hasil);
		while($r=mysql_fetch_array($hasil)){
		echo"<tr><td>$no</td><td>$r[id_user]</td><td>$r[nama_lengkap]</td>
			<td>$r[email]</td><td>$r[level]</td><td>
			 <a href=?module=user&act=edituser&id=$r[id_user]>Edit</td>
			<td><a href='$aksi?module=user&act=delete&&id=$r[id_user]'>Delete</td></tr>";
			$no++;
		}
		echo"</table>";
        echo"<p align=left> <b>Total Jumlah Data = $total User</b></p>";
  break;
  case "tambahuser":
  echo"<h2>Tambah User</h2>
	  <form method=POST action='$aksi?module=user&act=input'>
	  <table>
<tr><td>Username</td>
<td> : <input type=text name='id_user' required size=30></td></tr>
<tr><td>Password</td>
<td> : <input type=text name='password' required size=30></td></tr>
<tr><td>Nama Lengkap</td>
<td> : <input type=text name='nama_lengkap'required  size=30></td></tr>
<tr><td>E-mail</td>
<td> : <input type=text name='email' required size=30></td></tr>";
?>
	  <tr><td>Level</td> <td>:</td>
	  <td><input style=margin-left:-210px; type="radio" checked  name='level' value="admin">admin
	  <input type="radio" name='level' value="user">user</td></tr>
<?php
echo"
<tr><td colspan=2><input type=submit value=Simpan>
<input type=button value=Batal onclick=self.history.back()>
</td></tr>
</table>
</form>";
   break; 
   case "edituser":
   	$tampil="Select * from user where id_user='$_GET[id]'";
	$hasil=mysql_query($tampil);
	$r=mysql_fetch_array($hasil);
	echo"<h2>Edit Data User</h2>
         <form method=POST action='$aksi?module=user&act=update'>
<table>
<input type=hidden name=id value='$r[id_user]'>
<tr><td>Username</td><td> :
<input type=text name=id_user size=30 value='$r[id_user]'></td></tr>
<tr><td>Password</td><td> :
<input type=text name=password size=30> *) </td></tr>
<tr><td>Nama Lengkap</td>
<td> : <input type=text name=nama_lengkap size=30 value='$r[nama_lengkap]'></td></tr>
<tr><td>E-mail</td>
<td> : <input type=text name=email size=30 value='$r[email]'></td></tr>";
?>

<?php
echo"
<tr><td>level</td>";
if ($r['level'] === "admin") :?>
<td>
			<input type="radio" name="level" value="admin" id="admin" checked /><label for="admin">admin <label>
            <input type="radio" name="level" value="user" id="user" /><label for="user">user</label></td>
            <?php else : ?>
            <td><input type="radio" name="level" value="admin" id="admin" /><label for="admin">admin</label>
            <input type="radio" name="level" value="user" id="user" checked /><label for="user">user</label>
            <?php endif;?>
</td>
</tr>
<?php
echo"
<tr><td colspan=2>*) Apabila password tidak diubah,
dikosongkan saja.</td></tr>
<tr><td colspan=2><input type=submit value=Update>
<input type=button value=Batal onclick=self.history.back()></td></tr>
</table>
</form>";
    break;
	}
}  
  
  
  
  
  