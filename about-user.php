<html>
<head>
	<style type="text/css">
		div#content{float:center; padding:0px 0 15px 0; margin:90px 140px 0 0; background-color:#FFF;}
	</style>
</head>
<body>
<div style="border:1px solid #FFA800; padding:10px; overflow:auto; width:1113px; height:408px;">
	<div id="content" align="center">
		<form action="login.php?op=in" method="POST"> 
			<table cellpadding="0" cellspacing="5" bgcolor="#FFA800">
				<tr height="36" bgcolor="#F8F8FF">
					<th colspan="5">Your Login Detail</th>
				</tr>
				<tr>
					<td>
						<table>
							<tr><br />
								<td><img src="image/user.jpg" width="100" height="100" /></td>
								<td style="vertical-align: top">
								Username&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $_SESSION['id_pengguna'];?><br />
								Nama Anda&nbsp;&nbsp;&nbsp;: <?php echo $_SESSION['nama_pengguna'];?><br />
								</td>
							</tr>
							<tr height="5">
								<td>&nbsp;</td>
								<td>&nbsp;</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>
</body>
</html>