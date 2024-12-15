<!DOCTYPE html>
<html lang="en">
<head>
<!-- เพิ่มฟอนซ์ -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<style>
body{
font-family: "Prompt", sans-serif;
  font-weight: 500;
  font-style: normal;
}
</style>
    
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตัวอย่าง 2 </title>
</head>

<body>
    <h1>โปรแกรมคำนวณพื้นที่สี่เหลี่ยมพื้นผ้า</h1>
     <?php
          $w=$_POST["width"];
          $h=$_POST["height"];
          $t=$_POST["thick"];
          $sum=$w*$h*$t*0.01;

          echo "  ความกว้าง  ".$w."  ความยาว  ".$h."ความหนา".$t."  พื้นที่เท่ากับ".$sum;
          
     ?>
   
</body>
</html>