<!-- ตอนที่ 7 การใช้งาน Get & Post และ Request -->
The get method 
    - การส่งข้อมูลไปที่ server ข้อมูลเพจมันจะถูกแบ่งด้วย ? 
      ตัวอย่าง http://www.test.com/index.htm?name1=value1&name2=value2
    - เอาไว้ส่งข้อมูลที่เป็นพวก binary data, image, ข้อความ
    - ไม่นิยมใช้กับข้อมูลสำคัญๆ อย่างเช่น password 
The post method
    - เวลาเราส่งข้อมูลจะไม่ปรากฏให้เห็นว่าส่งอะไรไป
    - จะนิยมใช้แบบโพสต์สำหรับการใส่รหัสผ่าน
The request variable
    - จะใช้เมื่อไม่รู้ว่าข้อมูลที่จะส่งเป็นประเภท get or post
    - สามารถรับรองทั้ง get และ post
<!DOCTYPE html><html><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title></head>
<body>
    <?php
        if(isset($_GET["name"]) && isset($_GET["age"])) {
         // print_r($_GET);//associative array
            echo "Welcome ". $_GET['name']. "<br>";
            echo "You are ". $_GET['age']. "years old.";
            exit();
        }
        // ==================================
        if(isset($_POST["name"]) && isset($_POST["age"])) {
            // print_r($_POST);//associative array
            echo "Welcome ". $_POST['name']. "<br>";
            echo "You are ". $_POST['age']. "years old.";
            exit();
        }
        // ==================================
        if(isset($_REQUEST["name"]) && isset($_REQUEST["age"])) {
            // print_r($_REQUEST);//associative array
            echo "Welcome ". $_REQUEST['name']. "<br>";
            echo "You are ". $_REQUEST['age']. "years old.";
            exit();
        }
    ?>
        <form action="<?php $_PHP_SELF ?>" method="get">
            name: <input type="text" name="name">
            <br>
            Age: <input type="text" name="age">
            <br>
            <input type="submit" value="submit">
        </form>
            <!--==================================-->
        <form action="<?php $_PHP_SELF ?>" method="post">
            name: <input type="text" name="name">
            <br>
            Age: <input type="text" name="age">
            <br>
            <input type="submit" value="submit">
        </form>
        <!--==================================-->
        <form action="<?php $_PHP_SELF ?>" method="post"><!--get-->
            name: <input type="text" name="name">
            <br>
            Age: <input type="text" name="age">
            <br>
            <input type="submit" value="submit">
        </form>
</body>
</html>