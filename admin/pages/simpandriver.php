<?php
//mengambil file koneksi yang ada di folder awal
require "../../koneksi.php";
//fungsi post untuk mengambil data dari page sebelumnya dari text input
$id           	    =$_POST['id_driver']; 
$nm           	    =$_POST['nama']; 
$nik				=$_POST['nik'];
$tmplahir			=$_POST['tmplahir'];
$tgllahir			=$_POST['tgllahir'];
$alamat			    =$_POST['alamat'];
$jkel				=$_POST['jkel'];
$usia				=$_POST['usia'];
$email				=$_POST['email'];



//buat simpan data
	$qr_simpan ="INSERT INTO tbdriver VALUES('$id','$nm','$nik','$tmplahir','$tgllahir','$alamat','$jkel','$usia','$email')";
	$res_simpan =mysqli_query($connected,$qr_simpan);

	if (!$res_simpan) {
		?>
		<script type="text/javascript">
			alert ('Data gagal disimpan');
			location.href='../index.php?p=ddriver';
		</script>
		<?php
	} else {
		?>
		<script type="text/javascript">
			alert ('Data berhasil disimpan...');
			location.href='../index.php?p=ddriver';
		</script>
		<?php
	}

?>  