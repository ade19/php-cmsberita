<?php
session_start();
if (empty($_SESSION['namauser']) AND
empty($_SESSION['password'])){
echo "<center>Untuk mengakses modul, Anda harus login <br>";
echo "<a href=index.php><b>LOGIN</b></a></center>";
}
else{
?>
<html>
<head>
<title>:: create Ade Saputra ::</title>
<link href="adminstyle1.css"
rel="stylesheet" type="text/css" />
</head>
<body style=background:url("as.png") repeat fixed #000}>
<div id="header">
<div id="ade" style="background:whitesmoke;width:800px;margin-left:0px;margin-top:27px;">
<div id="content1" style="height:100%;">
<?php include "content_modul.php";?>
</div>
<div id="menu">
<ul>
<li><a href=media.php?module=home>&#187; Home</a></li>
<?php include "menu.php"; ?>
<li><a href=logout.php>&#187; Logout</a></li>
</ul>
<p>&nbsp;</p>

</div>
<div id="footer">
copyrigt @2017 Fasilkom Teknik Informatika(TI-1)
</div>
</div>
</body>
</html>
<?php
}
?>