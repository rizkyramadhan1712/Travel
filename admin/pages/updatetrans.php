<?php 
require "../../Koneksi.php";
$id_mobil           	    =$_POST['id_mobil']; 
$nmken           	=$_POST['namaken']; 
$jken				=$_POST['jken'];
$nopol				=$_POST['nopol'];
$kapasitas			=$_POST['kapasitas'];
$thpajak			=$_POST['thpajak'];
$gambar				=$_POST['gambar'];
 

$qr_update	="UPDATE tbtrans SET namaken='$nmken', jken='$jken', nopol='$nopol', kapasitas='$kapasitas', thpajak='$thpajak', gambar='$gambar'  WHERE id_mobil ='$id_mobil'";
$res_update = mysqli_query($connected, $qr_update);

if(!$res_update){
	?>	
	<script type="text/javascript">
		alert ('Data gagal diupdate...');
	location.href='../index.php?p=dtrans';
	</script>
	<?php
} else {
	?>
	<script type="text/javascript">
		alert('Data berhasil diupdate...');
		location.href='../index.php?p=dtrans';
	</script>
	<?php
}
?>