<?php
if (empty($_GET['p'])) {
	require 'pages/beranda.php';
} else {
	$p = $_GET['p'];

	if ($p == 'beranda') {
		require 'pages/beranda.php';
	} elseif ($p == 'dtrans') {
		require 'pages/dtrans.php';
	} elseif ($p == 'ddriver') {
		require 'pages/ddriver.php';
	} elseif ($p == 'laporan') {
		require 'pages/laporan.php';
	} elseif ($p == 'jadwal') {
		require 'pages/jadwal.php';
	} elseif ($p == 'tambahtrans') {
		require 'pages/tambahtrans.php';
	} elseif ($p == 'edittrans') {
		require 'pages/edittrans.php';
	} elseif ($p == 'tambahdriver') {
		require 'pages/tambahdriver.php';
	} elseif ($p == 'editdriver') {
		require 'pages/editdriver.php';
	} elseif ($p == 'tambahlaporan') {
		require 'pages/tambahlaporan.php';
	}elseif ($p == 'editlaporan') {
		require 'pages/editlaporan.php';
	}
}
