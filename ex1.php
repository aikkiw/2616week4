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
    <title>ตัวอย่าง 1 </title>
</head>
<body>
    <h1>ทดสอบการส่งค่า เบื้องต้น</h1>

    <?php 
    // ทดสอบสร้างตัวแปร
     $x=7;
     $y=9;
     $z=$x+$y;
     echo $z;
     echo "<br> ทดสอบ ตัวแปรประเภทข้อความ <br>";
     $name="kiw";
     $surname="thanphisit";
     echo "สวัสดีครับคุณ ".$name." ".$surname;
     
    ?>
</body>
</html>