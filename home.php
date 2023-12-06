<?php
session_start();
//cek apakah user sudah login
if(!isset($_SESSION['id_pengguna'])){
    die("Anda belum login");
}
?>
<html>
<head>
	<title>Galeri Foto | Upload</title>
	<link href="asset/style.css" rel="stylesheet" type="text/css">	
	<script type="text/javascript" src="asset/JS/jquery.min.js"></script>

	<script type="text/javascript" src="asset/JS/fancybox/jquery.fancybox.js"></script>
	<script type="text/javascript" src="asset/JS/fancybox/jquery.mousewheel.js"></script>
	<link rel="stylesheet" type="text/css" href="asset/JS/fancybox/jquery.fancybox.css" media="screen" />
	<script type="text/javascript">
		$(document).ready(function() {
			$(".fancybox").fancybox();
		});
	</script>
	<script type="text/javascript" src="asset/JS/tooltip.js"></script>

	<style type="text/css">
		ul.navbar {list-style-type: none;padding: 0;margin: 0;position: relative;top: 0.5em;left: 1em;width: 11em;}
		ul.navbar li {background: #E6E6FA;margin: 0.5em 0;padding: 0.3em;border-right: 0.5em solid #FF6600;}
		ul.navbar a {text-decoration: none;}
		h1 {font-family: Helvetica, Geneva, Arial, Sans-Regular, sans-serif;}
		address {margin-top: 1em;padding-top: 1em;border-top: thin dotted;}
		a:link,a:visited,a:active {font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 11px;color: #000000;text-decoration: none;}
		a:hover {font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 11px;color: blue;text-decoration: none;}
	</style>
</head>
<body>
	<table width="1306" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr bgcolor="navy" height="110">
			<td width="10">&nbsp;</td>
			<td width="140"><div align="center"><img src="image/logo.png" width="100" height="90"></div></td>
			<td width="10">&nbsp;</td>
			<td width="986"><div align="center"><span class="header">GALERI FOTO<br><br></span>
			<font color="#F8F8FF"><b>UPLOAD</b></font></div></td>
			<td width="10">&nbsp;</td>
			<td width="140">&nbsp;</td>
			<td width="10">&nbsp;</td>
		</tr>
	</table>
	<table width="1306" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr bgcolor="#F8F8FF">
			<td width="10">&nbsp;</td>
			<td height="27"><div align="left"><strong><?php echo "Date : ".date("d-M-y");?></strong></div></td>
			<td>&nbsp;</td>
			<td align="right">Welcome&nbsp;<font color="#FF6600"><strong> <?=$_SESSION['nama_pengguna']?></strong></font>&nbsp;|&nbsp;<a href="logout.php">Log Out >>&nbsp;&nbsp;</a></td>
			<td>&nbsp;</td>
		</tr>
		<tr bgcolor="#F8F8FF">
			<td>&nbsp;</td>
			<td rowspan="4" valign="top"><table width="144" height="430" bgcolor="navy" border="0" cellspacing="0" cellpadding="0" align="top">
				<tr>
				<td valign="top"><ul class="navbar">
					<li><b>MAIN MENU</b></li><br>
					<li><a href="home.php?page=form-upload-foto" title="Upload Foto">&nbsp;Upload Foto</a></li>
					<li><a href="home.php?page=view-foto" title="View Foto">&nbsp;View</a></li>
					<li><a href="home.php?page=pro-version" title="Member Area">&nbsp;Member Area</a></li>
				</ul></td>
				</tr></table></td>
			<td rowspan="4">&nbsp;</td>
			<td rowspan="4" valign="top"><table width="1136" height="430" bgcolor="white" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td width="936" valign="top">
					<?php
					$page = (isset($_GET['page']))? $_GET['page'] : "main";
					switch ($page) {
						case 'form-upload-foto' : include "form-upload-foto.php"; break;
						case 'upload-foto' : include "upload-foto.php"; break;
						case 'view-foto' : include "view-foto.php"; break;
						case 'view-foto-detail' : include "view-foto-detail.php"; break;
						case 'form-master-kategori' : include "form-master-kategori.php"; break;
						case 'master-kategori' : include "master-kategori.php"; break;
						case 'pro-version' : include "pro-version.php"; break;
						case 'main' :
						default : include 'about-user.php';	
					}
					?></td>	
				</tr></table></td>
			<td rowspan="4">&nbsp;</td>
		</tr>
		<tr bgcolor="#F8F8FF">
			<td>&nbsp;</td>
		</tr>
		<tr bgcolor="#F8F8FF">
			<td>&nbsp;</td>
		</tr>
		<tr bgcolor="#F8F8FF">
			<td>&nbsp;</td>
		</tr>
		<tr bgcolor="#F8F8FF">
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>	
		</tr>
		<tr bgcolor="navy">
			<td style="line-height:175%" height="36" colspan="6" bgcolor="navy"><div align="right" style="margin:0 10px 0 0;"><font color="#F8F8FF">Developed &copy; 2015</font></div></td>
		</tr>
	</table>
</body>
</html>