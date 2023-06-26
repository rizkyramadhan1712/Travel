<?php
$url = 'http://localhost/travelapp/api.php';
// $url = 'https://manic-overalls.000webhostapp.com/travelapp/api.php'; // Ganti dengan URL endpoint API Anda

$data = array(
    'action' => 'laporan' // Ganti dengan tindakan yang valid
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
    $laporans = $data['data'];
    // Lakukan sesuatu dengan data laporan

    // Menampilkan query
    foreach ($laporans as $laporan) {
        $laporanId = $laporan['id_laporan'];
        $driverId = $laporan['id_driver'];
        $mobilId = $laporan['id_mobil'];
        $nopol = $laporan['nopol'];
        $tgl = $laporan['tgl'];
        $pemasukan = $laporan['pemasukan'];
        $pengeluaran = $laporan['pengeluaran'];
        $ket = $laporan['ket'];

        echo "ID Laporan: $laporanId <br>";
        echo "ID Driver: $driverId <br>";
        echo "ID Mobil: $mobilId <br>";
        echo "Nomor Polisi: $nopol <br>";
        echo "Tanggal: $tgl <br>";
        echo "Pemasukan: $pemasukan <br>";
        echo "Pengeluaran: $pengeluaran <br>";
        echo "Keterangan: $ket <br>";
        echo "<br>";
    }
} else {
    // Gagal
    $message = $data['message'];
    // Tampilkan pesan kesalahan atau lakukan tindakan yang sesuai
}
?>