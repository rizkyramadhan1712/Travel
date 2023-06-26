<?php
require "../../koneksi.php";
$u_name = $_GET['id_mobil'];
$sql_j 	= "DELETE FROM tbtrans WHERE id_mobil = '$u_name'";
$res_j 	=  mysqli_query($connected, $sql_j);
if ($res_j) {
	$sql = "DELETE FROM tbtrans WHERE id_mobil = '$u_name'";
	$res = mysqli_query($connected, $sql);

	if ($res) {
		?>
		<script>
			alert("Data telah terhapus.");
			location.href='../index.php?p=dtrans';
		</script>
		<?php
	}	
} else {
	?>
	<script>
		alert("Data gagal dihapus.");
		location.href='../index.php?p=dtrans';
	</script>
	<?php
}
?>