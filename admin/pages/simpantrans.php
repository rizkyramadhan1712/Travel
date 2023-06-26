<?php
//mengambil file koneksi yang ada di folder awal
require "../../koneksi.php";
//fungsi post untuk mengambil data dari page sebelumnya dari text input
$id_mobil           	    =$_POST['id_mobil']; 
$nmken           	=$_POST['namaken']; 
$jken				=$_POST['jken'];
$nopol				=$_POST['nopol'];
$kapasitas			=$_POST['kapasitas'];
$thpajak			=$_POST['thpajak'];
$gambar				=$_POST['gambar'];


//buat simpan data
	$qr_simpan ="INSERT INTO tbtrans VALUES('$id_mobil','$nmken','$jken','$nopol','$kapasitas','$thpajak','$gambar')";
	$res_simpan =mysqli_query($connected,$qr_simpan);

	if (!$res_simpan) {
		?> 
		<script type="text/javascript"> 
			alert ('Data gagal disimpan');
			// location.href='../index.php?p=Informasi';
		</script>
		<?php
	} else {
		?>
		<script type="text/javascript">
			alert ('Data berhasil disimpan...');
			location.href='../index.php?p=dtrans';
		</script>
		<?php
	}

?>  