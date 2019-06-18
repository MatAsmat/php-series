<!-- ตอนที่ 3 อาร์เรย์(arrays) -->
เป็นตัวแปรทีเก็บค่าหลายๆค่า
จะมีสามรูปแบบ
    - Indexed
    - Associative
    - Multi-dimentional
<!DOCTYPE html><html><head><meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title></head>
<body>
    <?php
// Indexed
    // อาร์เรย์ แบบที่1
        $people = array("Asmat", "Mat", "saleah");
        $number = array(19, 25, 30);
    // อาร์เรย์ แบบที่2
        $car = ['Honda', 'Toyota', 'Ford'];
    // เพิ่มค่าในอาร์เรย์ car
        $car[] = "BMW";
    // หรือ
        $car[4] = "Audi";
    // การเข้าถึง
        echo $people[1]; 
        echo $number[0];
        echo $car[4];    
    // หาจำนวนของอาร์เรย์
        echo count($car); //เวลานับจะนับคำเริ่มที่ 1 ไม่ได้นับindex
        print_r($car); //จะบอกindex
        var_dump($car); //function นี้นิยมกันมาก จะจำนวนของคำ นับคำ
// Associative => key , value = ค่า
        $people = array("John" => 25, "Joe" => 30, "Dash" => 35);
        $id = [25 => "Brad", 38 => "Jose", 45 => "William"];
    // การเพิ่มค่า
        $people["Ken"] = 40;
    //การเข้าถึง
        echo $people["John"]; // กำหนด key
        echo $id[25]; // กำหนด key
        echo $people["Ken"];
        echo count($people); 
        print_r($people); 
        var_dump($people); 
// Multi-dimentional
        $cars = array(
            array('Honda', 20, 15),
            array('Toyota', 30, 18),
            array('Ford', 23, 12),
        );
        echo $cars[1][1]; //[]ข้างหน้า บรรทัดที่เท่าไร []ข้างหลัง indexข้างใน
    ?>
</body>
</html>