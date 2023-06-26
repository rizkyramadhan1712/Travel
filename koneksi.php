<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dtbs = 'dbtravel';

$connected = mysqli_connect($host, $user, $pass, $dtbs); //menghubungkan ke server database

//cek keberhasilan
if ($connected) {
	echo "";
} else {
	echo "gagal tersambung ke server database";
}
?>