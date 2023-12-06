<?php
if ($_POST['Submit'] == "Submit") {
	$id_kategori	= $_POST['id_kategori'];
	$nama_kategori	= $_POST['nama_kategori'];
	
	include "koneksi.php";
	$input	="INSERT INTO tb_file_kategori (id_kategori, nama_kategori) VALUES ('$id_kategori','$nama_kategori')";
	$query_input =mysql_query($input);
	if ($query_input) {
	//Jika Sukses
		?>
				<script language="JavaScript">
				alert('Input Kategori Berhasil!');
				document.location='home.php?page=form-master-kategori';
				</script>
		<?php
	}
	else {
	//Jika Gagal
	echo "Input Kategori Gagal, Silahkan diulangi!";
	}
	//Tutup koneksi engine MySQL
	mysql_close($Open);
}
?>