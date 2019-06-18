<!-- ตอนที่ 9 การใช้งาน (COOKIES)
- cookies จะเก็บฝั่ง user -->
- สามารถตรวจสอบที่ server => application => cookie
    หรือ เช็คว่าข้อมูลอยู่ใน cookie หรือเปล่า ไปที่ setting
    => advanced => site setting => cookies
    => see all cookies and site data 
<?php
    if(isset($_POST['submit'])) {
        $username = htmlentities($_POST['username']);
        setcookie('username', $username, time() + 3600);
        header("Location: index2.php");
    }
?>
<!DOCTYPE html><html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title></head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="text" name="username" placeholder="Enter username">
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>