<html>
<body style=background:url("as.png") repeat fixed #000}>
<fieldset style=" background:skyblue;width: 50%; margin: auto;">
<?php
echo "<h2>Login</h2>
<form method=POST action=cek_login.php>
<table>
<tr><td>Username</td>
<td> : <input type=text name=id_user></td></tr>
<tr><td>Password</td>
<td> : <input type=password name=password></td></tr>
<tr><td colspan=3><input type=submit value=Login></td></tr>
</table>
</form>";
?>
</fieldset>
</body>
</html>