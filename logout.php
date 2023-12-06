<?php
session_start();
unset($_SESSION['id_pengguna']);
unset($_SESSION['nama_pengguna']);
session_destroy();
	header("Location:index.php");
?>