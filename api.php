<?php
include "koneksi.php";
// Konfigurasi database
define('DB_HOST', $host); // Host database
define('DB_USERNAME', $user); // Nama pengguna database
define('DB_PASSWORD', $pass); // Kata sandi pengguna database
define('DB_NAME', $dtbs); // Nama database

// Ambil data dari aplikasi mobile
$data = json_decode(file_get_contents('php://input'), true);

// Identifikasi tindakan yang diminta oleh aplikasi mobile
$action = isset($data['action']) ? $data['action'] : '';

// Inisialisasi respon
$response = array();

// Hubungkan ke database
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Periksa koneksi database
if ($mysqli->connect_errno) {
    // Koneksi gagal
    $response['success'] = false;
    $response['message'] = 'Koneksi database gagal: ' . $mysqli->connect_error;
} else {
    // Koneksi berhasil
    // Laporan
    if ($action == 'laporan') {
        // Tindakan: Mengambil data laporan

        // Query untuk mengambil data laporan
        $result = $mysqli->query("SELECT * FROM laporan");

        if ($result) {
            // Query berhasil

            // Mengambil hasil query
            $laporan = array();
            while ($row = $result->fetch_assoc()) {
                $laporan[] = $row;
            }

            $response['success'] = true;
            $response['message'] = 'Berhasil mendapatkan data laporan';
            $response['data'] = $laporan;
        } else {
            // Query gagal
            $response['success'] = false;
            $response['message'] = 'Gagal mengambil data laporan: ' . $mysqli->error;
        }

        // Menghapus hasil query dari memori
        $result->close();

    // Drivers
    } elseif ($action == 'tbdriver') {
        // Tindakan: Mengambil data pengemudi

        // Query untuk mengambil data pengemudi
        $result = $mysqli->query("SELECT * FROM tbdriver");

        if ($result) {
            // Query berhasil

            // Mengambil hasil query
            $drivers = array();
            while ($row = $result->fetch_assoc()) {
                $drivers[] = $row;
            }

            $response['success'] = true;
            $response['message'] = 'Berhasil mendapatkan data pengemudi';
            $response['data'] = $drivers;
        } else {
            // Query gagal
            $response['success'] = false;
            $response['message'] = 'Gagal mengambil data pengemudi: ' . $mysqli->error;
        }

        // Menghapus hasil query dari memori
        $result->close();
    
    // Trans
    } elseif ($action == 'tbtrans') {
        // Tindakan: Mengambil data transaksi

        // Query untuk mengambil data transaksi
        $result = $mysqli->query("SELECT * FROM tbtrans");

        if ($result) {
            // Query berhasil

            // Mengambil hasil query
            $transaksi = array();
            while ($row = $result->fetch_assoc()) {
                $transaksi[] = $row;
            }

            $response['success'] = true;
            $response['message'] = 'Berhasil mendapatkan data transaksi';
            $response['data'] = $transaksi;
        } else {
            // Query gagal
            $response['success'] = false;
            $response['message'] = 'Gagal mengambil data transaksi: ' . $mysqli->error;
        }

        // Menghapus hasil query dari memori
        $result->close();
    
    // Users
    } elseif ($action == 'user') {
        // Tindakan: Mengambil data pengguna

        // Query untuk mengambil data pengguna
        $result = $mysqli->query("SELECT * FROM user");

        if ($result) {
            // Query berhasil

            // Mengambil hasil query
            $users = array();
            while ($row = $result->fetch_assoc()) {
                $users[] = $row;
            }

            $response['success'] = true;
            $response['message'] = 'Berhasil mendapatkan data pengguna';
            $response['data'] = $users;
        } else {
            // Query gagal
            $response['success'] = false;
            $response['message'] = 'Gagal mengambil data pengguna: ' . $mysqli->error;
        }

        // Menghapus hasil query dari memori
        $result->close();

        //  Laporan
    } else {
        // Tindakan tidak dikenali
        $response['success'] = false;
        $response['message'] = 'Tindakan tidak valid';
    }

    // Menutup koneksi database
    $mysqli->close();
}

// Mengirimkan respon ke aplikasi mobile dalam format JSON
header('Content-Type: application/json');
echo json_encode($response);
?>