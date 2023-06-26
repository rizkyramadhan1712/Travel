<?php
//mengambil file koneksi yang ada di folder awal
require "../../koneksi.php";
//fungsi post untuk mengambil data dari page sebelumnya dari text input
$id_laporan           	    = $_POST['id_laporan'];
$id_driver           	    = $_POST['id_driver'];
$id_mobil				= $_POST['id_mobil'];
$nopol			= $_POST['nopol'];
$tgl			= $_POST['tgl'];
$pemasukan			    = $_POST['pemasukan'];
$pengeluaran				= $_POST['pengeluaran'];
$ket				= $_POST['ket'];



//buat simpan data
$qr_simpan = "INSERT INTO laporan VALUES('$id_laporan','$id_driver','$id_mobil','$nopol','$tgl','$pemasukan','$pengeluaran','$ket')";
$res_simpan = mysqli_query($connected, $qr_simpan);

if (!$res_simpan) {
?>
	<script type="text/javascript">
		alert('Data gagal disimpan');
		location.href = '../index.php?p=ddriver';
	</script>
<?php
} else {
?>
	<script type="text/javascript">
		alert('Data berhasil disimpan...');
		location.href = '../index.php?p=ddriver';
	</script>
<?php
}

?>