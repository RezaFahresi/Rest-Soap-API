<?php
// URL API
$url = 'http://jsonplaceholder.typicode.com/posts';

// Data yang akan dikirim
$data = [
    'title' => 'Belajar PHP dan cURL',
    'body' => 'Ini adalah konten baru yang menunjukkan cara mengirim data menggunakan POST request dengan PHP dan cURL.',
    'userId' => 2 // Contoh userId
];

// Mengonversi data menjadi format JSON
$jsonData = json_encode($data);

// Inisialisasi cURL
$ch = curl_init($url);

// Mengatur opsi cURL
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Content-Length: ' . strlen($jsonData)
]);

// Mengirim permintaan dan mendapatkan respons
$response = curl_exec($ch);

// Menangani kesalahan cURL
if (curl_errno($ch)) {
    echo 'Error: ' . curl_error($ch);
} else {
    // Mengonversi respons dari JSON menjadi array
    $responseData = json_decode($response, true);
    
    // Pemberitahuan
    if (isset($responseData['id'])) {
        echo "Data berhasil dikirim! Berikut adalah detail data yang telah dikirim:\n";
        echo '<pre>';
        print_r($responseData);
        echo '</pre>';
    } else {
        echo "Gagal mengirim data. Respons dari API: ";
        echo '<pre>';
        print_r($responseData);
        echo '</pre>';
    }
}

// Menutup koneksi cURL
curl_close($ch);
?>
