<?php 
$judul = "halaman website shakira";
$deskripsi ="haiiiiii";
$konten = "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of  (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum,, comes from a line in section 1.10.32 The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
    .judul{
        color : red;
    }
    
        .poppins-light {
  font-family: "Poppins", sans-serif;
  font-weight: 300;
  font-style: normal;
    }
.atur{
    margin-top : -30px;
    color : blue;
}
    .poppins-bold {
  font-family: "Poppins", sans-serif;
  font-weight: 700;
  font-style: normal ;

  }
  .poppins-extralight {
  font-family: "Poppins", sans-serif;
  font-weight: 200;
  font-style: normal;
}
</style>
</head>
<body>
    <!-- membuatperulangandidalamphp -->
    <?php for ($i = 0; $i < 4; $i++ ):?>
    <h1  class ="poppins-bold judul "> <?php echo $judul ?></h1>
    <h2 class = "poppins-thin atur"> <?php echo $deskripsi ?></h2>
    <h2 class ="poppins-extralight"> <?php echo $konten ?></h2>
    <?php endfor?>
</body>
</html>