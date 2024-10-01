<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DELETE Request API</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
        }
        .response-box {
            margin-top: 20px;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #fafafa;
        }
        .success {
            color: green;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Hasil DELETE Request ke API</h1>

    <?php
    // URL API tujuan (dengan ID data yang ingin dihapus)
    $url = 'https://jsonplaceholder.typicode.com/posts/1';

    // Inisialisasi cURL
    $ch = curl_init();

    // Set opsi untuk metode DELETE
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");

    // Nonaktifkan verifikasi SSL (tidak aman, hanya untuk pengembangan)
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

    // Set agar hasil dikembalikan sebagai string
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Eksekusi cURL dan cek error
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $curlError = curl_error($ch);

    // Tutup cURL
    curl_close($ch);

    // Tampilkan hasil respon dalam HTML
    echo "<div class='response-box'>";
    if ($httpCode == 200) {
        echo "<p class='success'>Request berhasil! Data dengan ID 1 telah dihapus.</p>";
    } elseif ($curlError) {
        echo "<p class='error'>Gagal melakukan DELETE request. Error: " . $curlError . "</p>";
    } else {
        echo "<p class='error'>Gagal melakukan DELETE request. Kode respon: " . $httpCode . "</p>";
    }
    echo "</div>";
    ?>
</div>

</body>
</html>
