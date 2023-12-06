<html>
	<head>
		<title>Galeri Foto | Upload</title>
		<link href="asset/style.css" rel="stylesheet" type="text/css" />
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
			<td  width="10">&nbsp;</td>
			<td height="27"><div align="left"><strong><?php echo "Date : ".date("d-M-y");?></strong></div></td>
			<td>&nbsp;</td>
			<td align="right">Welcome&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr bgcolor="#F4F4F4">
			<td>&nbsp;</td>
			<td rowspan="4" valign="top"></td>
			<td rowspan="4">&nbsp;</td>
			<td rowspan="4" valign="top"><table width="1136" height="430" bgcolor="#F4F4F4" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td width="936" valign="top">
					<?php
					$page = (isset($_GET['page']))? $_GET['page'] : "main";
					switch ($page) {
						default : include 'form-login.php';	
					}
					?></td>	
				</tr></table></td>
			<td rowspan="4">&nbsp;</td>
		</tr>
		<tr bgcolor="#F4F4F4">
			<td>&nbsp;</td>
		</tr>
		<tr bgcolor="#F4F4F4">
			<td>&nbsp;</td>
		</tr>
		<tr bgcolor="#F4F4F4">
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