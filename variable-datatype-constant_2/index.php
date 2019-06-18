<!-- ตอนที่ 2 ตัวแปร(Variables) ชนิดข้อมูล(Data types) ค่าคงที่(Constants) -->
- ขึ้นต้นด้วย $
- data type มี 8
<!DOCTYPE html><html><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title></head>
<body>
    <?php
        // Single line comment
        # Single line comment
        /*
            Multiline comment  
        */
//String
        $fname = "Asmat";
        $lname = "Saleah";
    // แบบที่ 1
        $greeting = $fname .' '. $lname;
    // แบบที่ 2        
        $greeting2 = "$fname $lname"; //แสดงค่า value หรือ ค่า
        $greeting3 = '$fname $lname'; //จะแสดงเป็นชื่อตัวแปร แบบบรรทัดนี้เลย
        $string = "I\"m Asmat";   //ใส่ \ เพื่อแก้ปัญหา error      
// Float
        $float = 4.4;
//Boolean
        $boo = true;
        $boo = false;
    // การเข้าถึง    
        echo $greeting;
        echo $greeting2;
        echo $greeting3;
        echo $string;
// ค่าคงที่
        define('NAME', 'Asmat');
        echo NAME; // case sensitive ตัวอักษรเล็ก ใหญ่ต้องเหมือนกัน
    // วิธีแก้
        define('NAME', 'Asmat', true);
        echo name; //ใส่ค่า boolean เข้าไป
        // $num1 = 9;
        // $num2 = 10;
        // $sum = $num1 + $num2;
        // echo $sum;
    ?>
</body>
</html>