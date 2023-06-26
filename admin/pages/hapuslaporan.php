<?php
require "../../koneksi.php";
$u_name = $_GET['id_laporan'];
$sql_j 	= "DELETE FROM laporan WHERE id_laporan = '$u_name'";
$res_j 	=  mysqli_query($connected, $sql_j);
if ($res_j) {
	$sql = "DELETE FROM laporan WHERE id_laporan = '$u_name'";
	$res = mysqli_query($connected, $sql);

	if ($res) {
		?>
		<script>
			alert("Data telah terhapus.");
			location.href='../index.php?p=laporan';
		</script>
		<?php
	}	
} else {
	?>
	<script>
		alert("Data gagal dihapus.");
		location.href='../index.php?p=laporan';
	</script>
	<?php
}
?>