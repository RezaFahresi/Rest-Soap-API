<?php
// URL API
$url = 'https://jsonplaceholder.typicode.com/posts';

// Mengambil data menggunakan GET request
$response = file_get_contents($url);

// Mengonversi JSON menjadi array PHP
$data = json_decode($response, true);

// Mengambil 5 data pertama
$firstFivePosts = array_slice($data, 0, 5);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Post</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
        h1 {
            text-align: center;
        }
        .post {
            background: white;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 15px;
            margin: 10px 0;
        }
        .post h2 {
            font-size: 18px;
            color: #333;
        }
        .post p {
            color: #555;
        }
    </style>
</head>
<body>
    <h1>Daftar 5 Post Teratas</h1>
    <?php foreach ($firstFivePosts as $post): ?>
        <div class="post">
            <h2><?php echo htmlspecialchars($post['title']); ?></h2>
            <p><?php echo htmlspecialchars($post['body']); ?></p>
        </div>
    <?php endforeach; ?>
</body>
</html>
