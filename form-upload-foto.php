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
<form action="home.php?page=upload-foto" method="POST" name="formuploadfoto" enctype="multipart/form-data">
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
			<td><font color="orange" size="2"><b>FORM UPLOAD FOTO</b></font></td>
		</tr>
	</table>
	<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr height="36">
			<td>&nbsp;</td>
			<td>ID</td>
			<td><input name="id_file" type="text" id="id_file" size="50" value="<?php echo kdauto("tb_file","F-"); ?>" disabled="disabled" />
				<input name="id_file" type="hidden" id="id_file" value="<?php echo kdauto("tb_file","F-"); ?>" /></td>
		</tr>
		<tr height="36">
			<td>&nbsp;</td>
			<td>Foto</td>
			<td><input type="file" name="nama_file" size="50"/>&nbsp;</td>
		</tr>
		<tr height="36">
			<td>&nbsp;</td>
			<td>Deskripsi</td>
			<td><input type="text" name="deskripsi" size="50" maxlength="255"></td>
		</tr>
		<tr height="36">
			<td>&nbsp;</td>
			<td>Tanggal</td>
			<td><input name="tgl_upload" value="" size="16">&nbsp;<a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.formuploadfoto.tgl_upload);return false;" ><img name="popcal" align="absmiddle" src="calender/calbtn.gif" width="34" height="22" border="0" alt=""></a></td>
		</tr>
		<tr height="36">
				<td>&nbsp;</td>
				<td>Kategori</td>
				<td><?php
					$resultKat = mysql_query("SELECT * FROM tb_file_kategori");    
					$jsArray = "var nama_kategori = new Array();\n";    
					echo '<select name="kategori" onchange="changeValue(this.value)">';    
					echo '<option value=""> - pilih kategori - </option>';    
					while ($row = mysql_fetch_array($resultKat)) {    
						echo '<option value="' . $row['id_kategori'] . '">' . $row['id_kategori'] . ' _ ' . $row['nama_kategori']. '</option>';       
					}    
					echo '</select>';
					?>
				</td>
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