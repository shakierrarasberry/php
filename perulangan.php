<?php
//perulangan for
echo "<h1>contoh for</h1>" ;
for($i = 0; $i < 1000; $i++){
    echo "perulangan ke-$i";
}
echo "<br/> . <hr/>";
echo "<br/>";
echo "<br/>";


//perulangan while


//perulangan foreach
 //buat dulu variable nya
 echo "<h1>contoh foreach</h1>" ;
 $siswarpl = ["udin","jamal","uden"];

 //buat perulangannya
 foreach ($siswarpl as $siswa){
    echo $siswa."<br/> ";
 }
 echo "<hr/>";
 //sebenernya namanya boleh sama. kyk "siswarpl smua",tapi bedain aja biar gampang.dan yang di tulis di echo nya adalah yang sebelah kanan.karena klo yang $siswarpl itu mencakup semua data,klo yang $siswa itu mencakup satuan.
 
 //foreach yang ada key nya
 echo "<h1>contoh foreach yang ada keynya</h1>";
 $siswarpl = ["nama" => "shakira", "kelas" => "11", "jurusan" => "rpl"];
 
 //cara nampilinnya
 foreach($siswarpl as $kunci => $siswa){
    echo "$kunci : $siswa <br />";
 }
 echo "<hr/>";

 //perulangan bersarang
//buat variable nya dulu,jadi di dalam 1 variable ada 2 array
$pembelian = [["wortel","tomat","ubi"],["semangka","melon","pepeya"]];

foreach($pembelian as $item){ 
    foreach($item as $i){
        echo $i . "<br/>";
    }
}
//jadi $pembelian itu memcakup smua arai nya yang ada di dalam variable, $item itu mencakup arai nya satu satu,nah $i ini adalah isi si array nya 
//dan itu ada foreach di dalam foreach gunanya :foreach awal untulk mengulang array pembelian,dan foreach ke dua gunannya utuk mengulang isi dari array nya,jadi kita gak perlu nulis satu persatu code untuk nampilin array nya,tinggal pake perulangan saja .

//latihan
$belanjaan =[
    ["jenis" => "buah",
    "item" => [
        "nama" => "semangka",
        "jumlah" => 5,
    ],
    ],
    ["jenis" => "sayur",
    "item" => [
        "nama" => "wortel",
        "jumlah" => 15,
    ],
    ]

]