<?php
require "../../Koneksi.php";
$id_driver           	    = $_POST['id_driver'];
$nm           	    = $_POST['nama'];
$nik				= $_POST['nik'];
$tmplahir			= $_POST['tmplahir'];
$tgllahir			= $_POST['tgllahir'];
$alamat			    = $_POST['alamat'];
$jkel				= $_POST['jkel'];
$usia				= $_POST['usia'];
$email				= $_POST['email'];


$qr_update	= "UPDATE tbdriver SET nama='$nm', nik='$nik', tmplahir='$tmplahir', tgllahir='$tgllahir', alamat='$alamat', jkel='$jkel', usia='$usia', email='$email'  WHERE id_driver ='$id_driver'";
$res_update = mysqli_query($connected, $qr_update);

if (!$res_update) {
?>
	<script type="text/javascript">
		alert('Data gagal diupdate...');
		location.href = '../index.php?p=ddriver';
	</script>
<?php
} else {
?>
	<script type="text/javascript">
		alert('Data berhasil diupdate...');
		location.href = '../index.php?p=ddriver';
	</script>
<?php
}
?>