<?php
//mengambil file koneksi yang ada di folder awal
require "koneksi.php";
//fungsi post untuk mengambil data dari page sebelumnya dari text input
$username      = $_POST['username'];
$password      = $_POST['password'];


//buat simpan data
mysqli_query($connected,"insert into user values('','$username','$password')");

header("location:index.php")


?>