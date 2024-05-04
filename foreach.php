<?php
$buku = [
    ['judul' => 'Harry Potter', 'penulis' => 'J.K. Rowling', 'tahun_terbit' => 2000],
    ['judul' => 'Cara membuat kue', 'penulis' => 'Julia', 'tahun_terbit' => 1999],
    ['judul' => 'Lord of the Rings', 'penulis' => 'J.R.R. Tolkien', 'tahun_terbit' => 1954],
    ['judul' => 'Filosofi Teras', 'penulis' => 'Henry Manampiring', 'tahun_terbit' => 2023],
    ['judul' => 'Filosofi Untuk diri', 'penulis' => 'Asep', 'tahun_terbit' => 1993],
    ['judul' => 'Belajar PHP kurang dari 2 menit', 'penulis' => 'Safitri', 'tahun_terbit' => 2019],
    ['judul' => 'Ada apa dengan Gavi', 'penulis' => 'Hartati', 'tahun_terbit' => 2011],
];
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foreach</title>
 </head>
 <body>
    <?php foreach ($buku as $data_buku) {
    if ($data_buku['tahun_terbit'] >= 2000) {
        echo "Judul: " . $data_buku['judul'] . "<br>";
        echo "Penulis: " . $data_buku['penulis'] . "<br>";
        echo "Tahun Terbit: " . $data_buku['tahun_terbit'] . "<br><br>";
        
    }
} ?> 
 </body>
 </html>