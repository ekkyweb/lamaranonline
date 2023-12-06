<?php
session_start();
include "koneksi.php";
$id_pengguna	= $_POST['id_pengguna'];
$password 		= $_POST['password'];
$op = $_GET['op'];

if($op=="in"){
    $sql = mysql_query("SELECT * FROM tb_pengguna WHERE id_pengguna='$id_pengguna' AND password='$password'");
    if(mysql_num_rows($sql)==1){//jika berhasil akan bernilai 1
        $qry = mysql_fetch_array($sql);
        $_SESSION['id_pengguna'] 	= $qry['id_pengguna'];
		$_SESSION['nama_pengguna']	= $qry['nama_pengguna'];
			if($qry){
				header("location:home.php");
			}
			}
			else{
				?>
				<script language="JavaScript">
					alert('Username atau Password Tidak Sesuai!');
					document.location='index.php';
				</script>
				<?php
			}
	}
	else if($op=="out"){
		unset($_SESSION['id_pengguna']);
		unset($_SESSION['nama_pengguna']);
		header("location:index.php");
	}
?>