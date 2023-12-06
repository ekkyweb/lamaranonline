<?php
//buka koneksi ke engine MySQL
	$Open = mysql_connect("localhost","root","");
		if (!$Open){
		die ("Koneksi ke Engine MySQL Gagal !<br>");
		}
//koneksi ke database
	$Koneksi = mysql_select_db("db_upload");
		if (!$Koneksi){
		die ("Koneksi ke Database Gagal !");
		}

		//Fungsi Perkecil Ukuran Gambar //
//penggunaan ===> perkecil("img/siswa_1.JPG", "img/small/"); (folder/file, folder/folder/)
function perkecil($imgAsal, $imgTujuan) {
	$pcImgAsal 		= explode("/", $imgAsal);
	$jAr			= count($pcImgAsal) - 1;

	$namaFileAsli	= $pcImgAsal[$jAr];

	//identitas file asli
	$im_src = imagecreatefromjpeg($imgAsal);
	$src_width = imageSX($im_src);
	$src_height = imageSY($im_src);

	//Simpan dalam versi small 110 pixel
	//set ukuran gambar hasil perubahan
	$dst_width = 110;
	$dst_height = ($dst_width/$src_width)*$src_height;

	//proses perubahan ukuran
	$im = imagecreatetruecolor($dst_width,$dst_height);
	imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);

	//Simpan gambar
	imagejpeg($im, $imgTujuan."_s_".$namaFileAsli);


	imagedestroy($im_src);
	imagedestroy($im);
}
?>