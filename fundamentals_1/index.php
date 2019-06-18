<!-- ตอนที่ 1 ทำความรู้จักกับ PHP [Fundamentals] -->
- back end
- เริ่มต้น $
- age ไม่เท่ากับ AGE
- Data Type = String, Integer, Float, Boolean, 
             Array, Object, NULL, Resource
<!DOCTYPE html><html><head><meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title></head>
<body>
<!-- string -->
    <?php
        echo  "Hello, Word!";
    ?>
<!-- Integer -->
    <?php
        $x = 5;
        $y = 10;
        $z = $x + $y;
        echo $z;
    ?>
<!-- html in php -->
    <?php
        echo "<h2> Asmat </h2>";
        echo "Saleah <br>"
    ?>
<!-- การต่อคำคือ .  -->
    <?php
        $fname = "Asmat";
        $lname = "Saleah";
        echo "My name " . $fname ." ". $lname;
    ?>
</body>
</html>