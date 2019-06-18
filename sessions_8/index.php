<!-- ตอนที่ 8 การใช้งาน (SESSIONS) -->
- เป็นการเก็บข้อมูลในฝั่ง server ถ้าเป็น cookies ก็จะเก็บฝั่ง user
<!-- การเช็ค -->
    <?php
        /* if(isset($_POST['submit'])) ;
             echo 123;  การเช็คเล่นๆ */
        if(isset($_POST['submit'])) {
            session_start();
            $_SESSION['name'] = htmlentities($_POST['name']);
            $_SESSION['email'] = htmlentities($_POST['email']);
            header('location: index2.php');
        }
    ?>
<!DOCTYPE html><html><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title></head>
<body>
                <!--ให้มันทำงานในเพจ ไม่ต้องไปหน้าอื่น-->
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="text" name="name" placeholder="Enter name">
        <br>
        <input type="email" name="email" placeholder="Enter email">
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>