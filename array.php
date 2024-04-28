<?php
$siswaRPL = [ //array multidimensi
    ["nama" => "nana", "kelas" => 11, "jurusan" => "rpl"],
    ["nama" => "nunu", "kelas" => 11, "jurusan" => "rpl"],
    ["nama" => "nina", "kelas" => 11, "jurusan" => "rpl"],    
];
echo $siswaRPL[0]["nama"]; //menampilkan data ke1 dengan menampilkan nama
echo $siswaRPL[0]["kelas"]; //menampilkan data ke1 dengan menampilkan kelas
echo $siswaRPL[0]["jurusan"]; //menampilkan data ke1 dengan menampilkan jurusan
echo "<hr />";
echo $siswaRPL[1]["nama"]; //menampilkan data ke2 dengan menampilkan nama
echo $siswaRPL[1]["kelas"]; //menampilkan data ke2 dengan menampilkan kelas
echo $siswaRPL[1]["jurusan"]; //menampilkan data ke2 dengan menampilkan jurusan
echo "<hr />";
echo $siswaRPL[2]["nama"]; //menampilkan data ke3 dengan menampilkan nama
echo $siswaRPL[2]["kelas"]; //menampilkan data ke3 dengan menampilkan kelas
echo $siswaRPL[2]["jurusan"]; //menampilkan data ke3 dengan menampilkan jurusan
echo "<hr />";
$siswa = [ // array asosisatif
    "nama" => "nini",
    "kelas" => 11,
    "jurusan" => "rpl"
];
echo $siswa["nama"];