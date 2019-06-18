<!-- คำสั่งเรียกใช้งาน session -->
<?php
    session_start();
    // $_SESSION['name'] = "Asmat"; //สามารถเปลี่ยนชื่อได้
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
?>
<!DOCTYPE html><html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h4>ยินดีต้อนรับ <?php echo $name; ?> สำหรับการสมัครสมาชิกด้วยอีเมล์ 
        <?php echo $email; ?></h4>  
    <a href="index3.php">ไปหน้าที่3</a>  
</body>
</html>