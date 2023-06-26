<?php
require "../../Koneksi.php";
$id_laporan           	    = $_POST['id_laporan'];
$id_driver           	    = $_POST['id_driver'];
$id_mobil				= $_POST['id_mobil'];
$nopol			= $_POST['nopol'];
$tgl			= $_POST['tgl'];
$pemasukan			    = $_POST['pemasukan'];
$pengeluaran				= $_POST['pengeluaran'];
$ket				= $_POST['ket'];



$qr_update	= "UPDATE laporan SET  id_driver='$id_driver',,id_mobil='$id_mobil', nopol='$nopol', tgl='$tgl', pemasukan='$pemasukan', pengeluaran='$pengeluaran', ket='$ket'   WHERE id_laporan ='$id_laporan'";
$res_update = mysqli_query($connected, $qr_update);

if (!$res_update) {
?>
	<script type="text/javascript">
		alert('Data gagal diupdate...');
		location.href = '../index.php?p=laporan';
	</script>
<?php
} else {
?>
	<script type="text/javascript">
		alert('Data berhasil diupdate...');
		location.href = '../index.php?p=laporan';
	</script>
<?php
}
?>