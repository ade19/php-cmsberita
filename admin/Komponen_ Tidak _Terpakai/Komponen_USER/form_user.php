<html>
<head></head>
<body style=background:url("as.png") repeat fixed #000};>
<fieldset style=" background:skyblue;width: 50%; margin: auto;">
<?php
echo "<legend><i><h2>Tambah User</h2></i></legend>
<form method=GET action=input_user.php>
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
?>
</fieldset>
</body>
</html>