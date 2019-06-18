<?php
    session_start();
    // $name = $_SESSION['name'];
    // การแก้ไม่ให้ error ถ้ามีให้ขึ้นชื่อ ถ้าไม่มีให้ขึ้นคำว่า Guest
    $name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest';
    $email = isset($_SESSION['email']) ? $_SESSION['email'] : 'ยังไม่ได้สมัครสมาชิก';
?>
<!DOCTYPE html><html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title></head>
<body>
    <h1>สวัสดีครับคุณ <?php echo $name; ?></h1>
    <h1><?php echo $email; ?></h1>
</body>
</html>