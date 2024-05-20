<?php
 $jurusan = [
    [
      "nama" => "RPL",
      "siswa" => [
        ["nama" => "satria", "umur" => "18 tahun", "nilai" => 88],
        ["nama" => "fattah", "umur" => "19 tahun", "nilai" => 40],
      ],
    ],

    [
      "nama" => "TKJ",
      "siswa" => [
          ["nama" => "shakira", "umur" => "17 tahun", "nilai" => 2000],
          ["nama" => "marsina", "umur" => "20 tahun", "nilai" => 1000],
      ],
    ],

    [
      "nama" => "TKR",
      "siswa" => [
          ["nama" => "Raden", "umur" => "16 tahun", "nilai" => 77],
          ["nama" => "Fariz", "umur" => "20 tahun", "nilai" => 0],
      ]
    ]
  ];
 ?>
 


<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
  </head>

  <body>
  <div class="container my-5">
    <h1>Data Siswa</h1>
      <?php foreach($jurusan as $js) : ?>
        <h3><?= $js['nama'] ?></h3>

    <table class="table">
      <thead>
        <tr class = "<?php echo 'table-secondary'?>">
          <th scope="col">nama</th>
          <th scope="col">Umur</th>
          <th scope="col">nilai</th>
          <th scope="col">keterangan</th>
          <th scope="col">nilai huruf</th>
          
          
      </thead>

      <tbody>

       <?php foreach ($js ["siswa"] as $siswaa) : ?>

        <tr class = "<?php if($siswaa['nilai'] >= 75) echo 'table-success'; else  echo 'table-danger'; ?> ">
          <td><?php echo $siswaa['nama'];?></td>
          <td><?php echo $siswaa['umur'];?></td>
          <td><?php echo $siswaa['nilai'];?></td>

          <td>
          <?php if ($siswaa ["nilai"] >= 75){
            echo "anjayy lulus";
          }else{
            echo "yhahahaha mampus remed";
          } ?>
          </td>
          <td>
        <?php 
        if ($siswaa ['nilai'] > 90){
          echo "a";
        }
        else if($siswaa['nilai'] >= 80 && $siswaa['nilai'] < 90){
          echo "b";
        }else if($siswaa ['nilai'] >= 75 && $siswaa['nilai'] < 80){
            echo "c";
       }else if($siswaa ['nilai'] < 75){
        echo "d";
   }
      
      
        
        ?>
         </td>
         </tr>
        <?php endforeach ?>
       
       
       
        
      </tbody>
        <tbody>
      

    </table>
    <?php endforeach ?>
  </div>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
