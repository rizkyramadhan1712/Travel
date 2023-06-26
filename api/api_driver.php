<?php
$url = 'http://localhost/travelapp/api.php'; // Ganti dengan URL endpoint API Anda
// url = 'https://manic-overalls.000webhostapp.com/travelapp/api.php'

$data = array(
    'action' => 'tbdriver' // Ganti dengan tindakan yang valid
);

$options = array(
    CURLOPT_URL => $url,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => json_encode($data),
    CURLOPT_RETURNTRANSFER => true,
);

$curl = curl_init();
curl_setopt_array($curl, $options);
$response = curl_exec($curl);
curl_close($curl);

// Menggunakan data respons dari API
$data = json_decode($response, true);
if ($data['success']) {
    // Berhasil
    $drivers = $data['data'];
    // Lakukan sesuatu dengan data drivers

    // Menampilkan query
    foreach ($drivers as $driver) {
        $driverId = $driver['id_driver'];
        $driverName = $driver['nama'];
        $driverNik = $driver['nik'];
        $driverTmplahir = $driver['tmplahir'];
        $driverTgllahir = $driver['tgllahir'];
        $driverAlamat = $driver['alamat'];
        $driverJkel = $driver['jkel'];
        $driverUsia = $driver['usia'];
        $driverEmail = $driver['email'];

        echo "Driver ID: $driverId <br>";
        echo "Nama: $driverName <br>";
        echo "NIK: $driverNik <br>";
        echo "Tempat Lahir: $driverTmplahir <br>";
        echo "Tanggal Lahir: $driverTgllahir <br>";
        echo "Alamat: $driverAlamat <br>";
        echo "Jenis Kelamin: $driverJkel <br>";
        echo "Usia: $driverUsia <br>";
        echo "Email: $driverEmail <br>";
        echo "<br>";
    }
} else {
    // Gagal
    $message = $data['message'];
    // Tampilkan pesan kesalahan atau lakukan tindakan yang sesuai
}
?>
