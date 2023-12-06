<div id="isi" style="border:1px solid #FFA800; padding:10px; overflow:auto; width:1113px; height:408px;">
	<table width="1100" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr height="26">
			<td align="center"><font color="orange" size="2"><b>GALERI FOTO</b></font></td>
		</tr>
	</table>
	<p>
	<?php 
	include "koneksi.php";
	echo "<ul id='produk'>";
	
	$QKategori	= mysql_query("SELECT * FROM tb_file_kategori");
		
	while ($AKategori = mysql_fetch_array($QKategori)) {
		$Kategori = $AKategori[0];
							
		$QGetNamaKategori	= mysql_query("SELECT nama_kategori FROM tb_file_kategori WHERE id_kategori = '$Kategori'");
		$AGetNamaKategori	= mysql_fetch_array($QGetNamaKategori);
			
		$QJumlahPerKategori = mysql_query("SELECT nama_file FROM tb_file WHERE kategori = '$Kategori'");
		$JJumlahPerKategori = mysql_num_rows($QJumlahPerKategori);
			
		$QGaleri 	= mysql_query("SELECT * FROM tb_file WHERE kategori = '$Kategori' ORDER BY RAND()");
		$AGaleri	= mysql_fetch_array($QGaleri);
		
			if ($JJumlahPerKategori == 0) {
				echo "
				<a href='#' onclick=\"javascript:alert('belum ada foto ..!')\" class='tooltip' title='$AGetNamaKategori[0]'>
					<li class='lis-produk-depan'>
						<div class='isi'><img src='file/no-image.jpg'></div>
					</li>
				</a>";
			} else {
				echo "
				<a href='home.php?page=view-foto-detail&id_kategori=$Kategori' class='tooltip' title='$AGetNamaKategori[0]'>
					<li class='lis-produk-depan'>
						<div class='isi'><img src='file/$AGaleri[1]'></div>
					</li>
				</a>";
			}
	}
	echo "</ul>";
	?>
	</p>
</div>