<?php
session_start();
session_destroy();
echo "Anda telah sukses keluar sistem <b>[LOGOUT]</b>";
header("location:http://localhost/Portal-Berita");
?>