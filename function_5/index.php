<!-- ตอนที่ 5 ฟังก์ชั่น -->
Function block of code that can be repeatedly called
การทำงานเป็นบล๊อค การทำงานซ้ำๆ จะทำงานก็ต่อเมื่อถูกเรียกใช้
    - Camal Case - myFunction();
    - Lower Case - my_function();
    - Pascal Cas - MyFunction();
<!DOCTYPE html><html><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title></head>
<body>
    <?php
// Create Simple Function
    function simpleFunction() {
        echo 'Hello World';
    }
    simpleFunction();
// Function with Parameter
    // แบบส่งค่า
    function sayHello($name) {
        echo "Hello $name<br>";
    }
    sayHello("Asmat");
    sayHello("Mat"); //เรียกซ้ำๆ หลายๆค่าได้
    //แบบไม่ส่งค่า ก็ต้องกำหนดค่า defult
    function sayHello2($name = 'Husna') {
        echo "Hi $name<br>";
    }
    sayHello2();
    // หรือ ถ้าส่งค่าไป ก็จะทับค่าเริ่มต้นแทน
    sayHello2("Abdulbasit");
// Return Value
    function addNumbers($num1, $num2) {
        return $num1 + $num2;
    }
    echo addNumbers(5, 10);
// By Referance
    $myNum = 10;
    function addFive($num) { // ค่าในตัวแปรmyNum จะแทนที่ addFive
        $num += 5; // นิยมใช้แบบนี้
        // $num = $num + 5;
    }
    function addTen(&$num) { // ถ้าใส่ & ค่าในตัวแปรmyNumจะ + addten 
        $num += 10;
    }
    addFive($myNum); // จะเท่ากับ 10
    echo "Value is $myNum<br>";
    addTen($myNum); // จะเท่ากับ 20
    echo "Value is $myNum<br>";
    ?>
</body>
</html>