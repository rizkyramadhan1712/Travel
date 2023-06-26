<?php
$url = 'http://localhost/travelapp/api.php';
// $url = 'https://manic-overalls.000webhostapp.com/travelapp/api.php'; // Ganti dengan URL endpoint API Anda

$data = array(
    'action' => 'user' // Ganti dengan tindakan yang valid
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
    $users = $data['data'];
    // Lakukan sesuatu dengan data user

    // Menampilkan query
    foreach ($users as $user) {
        $userId = $user['id'];
        $username = $user['username'];
        $password = $user['password'];

        echo "User ID: $userId <br>";
        echo "Username: $username <br>";
        echo "Password: $password <br>";
        echo "<br>";
    }
} else {
    // Gagal
    $message = $data['message'];
    // Tampilkan pesan kesalahan atau lakukan tindakan yang sesuai
}
?>

