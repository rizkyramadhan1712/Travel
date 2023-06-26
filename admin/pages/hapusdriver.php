<?php
require "../../koneksi.php";
$u_name = $_GET['id_driver'];
$sql_j 	= "DELETE FROM tbdriver WHERE id_driver = '$u_name'";
$res_j 	=  mysqli_query($connected, $sql_j);
if ($res_j) {
	$sql = "DELETE FROM tbdriver WHERE id_driver = '$u_name'";
	$res = mysqli_query($connected, $sql);

	if ($res) {
		?>
		<script>
			alert("Data telah terhapus.");
			location.href='../index.php?p=ddriver';
		</script>
		<?php
	}	
} else {
	?>
	<script>
		alert("Data gagal dihapus.");
		location.href='../index.php?p=ddriver';
	</script>
	<?php
}
?>