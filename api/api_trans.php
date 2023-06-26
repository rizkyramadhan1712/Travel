<?php
// Ganti dengan URL endpoint API Anda
$url = 'http://localhost/travelapp/api.php';
// $url = 'https://manic-overalls.000webhostapp.com/travelapp/api.php';

$data = array(
    'action' => 'tbtrans' // Ganti dengan tindakan yang valid
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
    $transaksi = $data['data'];
    // Lakukan sesuatu dengan data transaksi

    // Menampilkan query
    foreach ($transaksi as $trans) {
        $mobilId = $trans['id_mobil'];
        $namaKen = $trans['namaken'];
        $jenisKen = $trans['jken'];
        $nopol = $trans['nopol'];
        $kapasitas = $trans['kapasitas'];
        $tglPajak = $trans['thpajak'];
        $gambar = $trans['gambar'];

        echo "ID Mobil: $mobilId <br>";
        echo "Nama Kendaraan: $namaKen <br>";
        echo "Jenis Kendaraan: $jenisKen <br>";
        echo "Nomor Polisi: $nopol <br>";
        echo "Kapasitas: $kapasitas <br>";
        echo "Tanggal Pajak: $tglPajak <br>";
        echo "Gambar: $gambar <br>";
        echo "<br>";
    }
} else {
    // Gagal
    $message = $data['message'];
    // Tampilkan pesan kesalahan atau lakukan tindakan yang sesuai
}
?>
