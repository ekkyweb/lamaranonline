<?php
if ($_POST['Submit'] == "Submit") {
	$id_file	= $_POST['id_file'];
	$nama_file	= $_FILES['nama_file']['name'];
	$deskripsi	= $_POST['deskripsi'];
	$tgl_upload	= $_POST['tgl_upload'];
	$kategori	= $_POST['kategori'];
	
	//Cek File
		if (strlen($nama_file)>0) {
			//upload Photo
			if (is_uploaded_file($_FILES['nama_file']['tmp_name'])) {
				move_uploaded_file ($_FILES['nama_file']['tmp_name'], "file/".$nama_file);
			}
		}
		
	include "koneksi.php";
	$input	="INSERT INTO tb_file (id_file, nama_file, deskripsi, tgl_upload, kategori) VALUES ('$id_file','$nama_file','$deskripsi','$tgl_upload','$kategori')";
	$query_input =mysql_query($input);
	if ($query_input) {
	//Jika Sukses
		?>
				<script language="JavaScript">
				alert('Upload Foto Berhasil!');
				document.location='home.php?page=form-upload-foto';
				</script>
		<?php
	}
	else {
	//Jika Gagal
	echo "Upload Foto Gagal, Silahkan diulangi!";
	}
	//Tutup koneksi engine MySQL
	mysql_close($Open);
}
?>