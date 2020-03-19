<html>
<body style=background:url("as.png") repeat fixed #000}>
<fieldset style=" background:skyblue;width: 50%; margin: auto;">
<?php
include "../config/koneksi.php";
$edit=mysql_query("SELECT * FROM user
WHERE id_user='$_GET[id]'");
$r=mysql_fetch_array($edit);
echo "<legend><i><h2>Edit User</h2><i></legend>
<form method=POST action=update_user.php>
<input type=hidden name=id value='$r[id_user]'>
<table>
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
?>
</fieldset>
</body>
</html>