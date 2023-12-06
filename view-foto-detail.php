<?php
include "koneksi.php";
$Kategori = $_GET['id_kategori'];
$nKategori = mysql_fetch_array(mysql_query("SELECT nama_kategori FROM tb_file_kategori WHERE id_kategori = '$Kategori'"));
?>
<div id="isi" style="border:1px solid #FFA800; padding:10px; overflow:auto; width:1113px; height:408px;">
	<table width="1100" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr height="26">
			<td align="center"><font color="orange" size="2"><b>Galeri <?php echo $nKategori[0]; ?></b></font></td>
		</tr>
	</table>
	<p>
		<div id="gallery" class="ad-gallery">
			<div class="ad-image-wrapper"></div>
			<div class="ad-controls"></div>
			<center>
			<div class="ad-nav">
				<div class="ad-thumbs">
					<ul id='produk'>
					<?php
					$QGaleri = mysql_query("SELECT * FROM tb_file WHERE kategori = '$Kategori'");
					while ($AGaleri = mysql_fetch_array($QGaleri)) {
					?>
					<li class="lis-produk">
					<h3><?php echo $AGaleri[2]?></h3>
					<a class="fancybox" href="file/<?php echo $AGaleri[1]?>" data-fancybox-group="gallery" title="<?php echo $AGaleri[2]?>">
						<img src="file/<?php echo $AGaleri[1]?>" alt="">
					</a>
					</li>
					<?php } ?>
					</ul>
				</div>
			</div>
			</center>
		</div>
	</p>
</div>