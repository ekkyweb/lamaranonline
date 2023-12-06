<div style="border:1px solid #FFA800; padding:10px; overflow:auto; width:1113px; height:408px;">
	<?php
		include "koneksi.php";		
		function kdauto($tabel, $inisial){
		$struktur   = mysql_query("SELECT * FROM $tabel");
		$field      = mysql_field_name($struktur,0);
		$panjang    = mysql_field_len($struktur,0);
		$qry  = mysql_query("SELECT max(".$field.") FROM ".$tabel);
		$row  = mysql_fetch_array($qry);
		if ($row[0]=="") {
		$angka=0;
		}
		else {
		$angka= substr($row[0], strlen($inisial));
		}
		$angka++;
		$angka      =strval($angka);
		$tmp  ="";
		for($i=1; $i<=($panjang-strlen($inisial)-strlen($angka)); $i++) {
		$tmp=$tmp."0";
		}
		return $inisial.$tmp.$angka;
		}
	?>
<form action="home.php?page=master-kategori" method="POST" name="formmasterkategori" enctype="multipart/form-data">
	<table bgcolor="#F8F8FF" width="1100" style="border:1px solid #FFA800; padding:0 0 0 10px;" align="center" cellpadding="0" cellspacing="0">
		<tr height="28">
			<td width="25%"><a href="home.php?page=form-master-kategori" title="master kategori">[ Master Kategori ]</a></td>
			<td width="25%"><a href="home.php?page=form-upload-foto" title="upload foto">[ Upload Foto ]</a></td>
			<td width="25%"></td>
			<td width="25%">&nbsp;</td>
		</tr>
	</table>
	<table width="1100" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr height="46">
			<td><font color="orange" size="2"><b>FORM MASTER KATEGORI</b></font></td>
		</tr>
	</table>
	<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr height="36">
			<td>&nbsp;</td>
			<td>ID</td>
			<td><input name="id_kategori" type="text" id="id_kategori" size="50" value="<?php echo kdauto("tb_file_kategori","K-"); ?>" disabled="disabled" />
				<input name="id_kategori" type="hidden" id="id_kategori" value="<?php echo kdauto("tb_file_kategori","K-"); ?>" /></td>
		</tr>
		<tr height="36">
			<td>&nbsp;</td>
			<td>Kategori</td>
			<td><input type="text" name="nama_kategori" size="50" maxlength="255"></td>
		</tr>
		<tr height="36">
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td><input type="submit" name="Submit" value="Submit">&nbsp;&nbsp;&nbsp;
				<input type="reset" name="reset" value="Reset"></td>
		</tr>
	</table>
</form>
</div>
<iframe width=174 height=189 name="gToday:normal:agenda.js" id="gToday:normal:agenda.js" src="calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
</iframe>