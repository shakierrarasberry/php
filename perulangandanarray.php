<?php
echo "<h1>tugas array dan perulangan</h1>";
echo "<br>";
echo "<p>no.1</p>";
echo "<br>";

$data_mahasiswa = [
    ["nama" => "shakira", "usia" => 19, "matkul" => "teknik informatika"],
    ["nama" => "inumaki", "usia" => 20, "matkul" => "matematika"],
    ["nama" => "gojo", "usia" => 37, "matkul" => "Kimia"]
];

echo "Nama: " . $data_mahasiswa[0]["nama"] . "<br>";
echo "Usia: " . $data_mahasiswa[0]["usia"] . "<br>";

echo "Nama: " . $data_mahasiswa[1]["nama"] . "<br>";
echo "Usia: " . $data_mahasiswa[1]["usia"] . "<br>";
echo "<br>";
echo "<p>no.2</p>";

$jurusan = [
    [ "nama" => "RPL",
      "siswa" => [
        ["nama" => "satria", "umur" => "18 tahun"],
        ["nama" => "fattah", "umur" => "19 tahun"],
      ],
    ],

    [
      "nama" => "TKJ",
      "siswa" => [
          ["nama" => "shakira", "umur" => "17 tahun"],
          ["nama" => "marsina", "umur" => "20 tahun"],
      ],
    ],

    [
      "nama" => "TKR",
      "siswa" => [
          ["nama" => "Raden", "umur" => "16 tahun"],
          ["nama" => "Fariz", "umur" => "20 tahun"],
      ]
    ]
  ];
  

foreach ($jurusan as $data_jurusan) {
    echo  $data_jurusan["nama"] . ":<br>";
    foreach ($data_jurusan["siswa"] as $siswa) {
        echo "- Nama: " . $siswa["nama"] . "<br>";
    }
    echo "<br>";
}
echo "<p>no.3</p>";
$buku = [
    ['judul' => 'Harry Potter', 'penulis' => 'J.K. Rowling', 'tahun_terbit' => 2000],
    ['judul' => 'Cara membuat kue', 'penulis' => 'Julia', 'tahun_terbit' => 1999],
    ['judul' => 'Lord of the Rings', 'penulis' => 'J.R.R. Tolkien', 'tahun_terbit' => 1954],
    ['judul' => 'Filosofi Teras', 'penulis' => 'Henry Manampiring', 'tahun_terbit' => 2023],
    ['judul' => 'Filosofi Untuk diri', 'penulis' => 'Asep', 'tahun_terbit' => 1993],
    ['judul' => 'Belajar PHP kurang dari 2 menit', 'penulis' => 'Safitri', 'tahun_terbit' => 2019],
    ['judul' => 'Ada apa dengan Gavi', 'penulis' => 'Hartati', 'tahun_terbit' => 2011],
];


foreach ($buku as $data_buku) {
    if ($data_buku['tahun_terbit'] >= 2000) {
        echo "Judul: " . $data_buku['judul'] . "<br>";
        echo "Penulis: " . $data_buku['penulis'] . "<br>";
        echo "Tahun Terbit: " . $data_buku['tahun_terbit'] . "<br><br>";
        
    }
}
?>