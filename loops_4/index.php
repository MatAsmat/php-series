<!-- ตอนที่ 4 ลูป(loops) -->
จะมี 4 แบบทั้งหมด
- For loop
- While loop
- Do..while loop
- Foreach loop
<!DOCTYPE html><html><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title></head>
<body>
    <?php
# For loop
        # init, condition, inc
        for($i = 0; $i < 10; $i++) {
            echo $i;
            echo '<br>';
        }
# While loop
        $i = 0;
        while($i < 10) {
            echo $i;
            echo '<br>';
            $i++;
        }   
# Do..while loop
        $i = 0;
        do {
            echo $i;
            echo '<br>';
            $i++;
        }
        while($i < 10);
# Foreach loop - For Arrays
    // แบบที่ 1 normal
        $people = array("Miler", "Asmat", "Mat");
        foreach($people as $person) {
            echo "Name of person : " .$person;
            echo '<br>';
        }
    // แบบที่ 2 key => value
        $people = array(
            'Miler' => 'miler@gmail.com',
            'Asmat' => 'asmat@gmail.com',
            'mat' => 'mat@gmail.com'
        );
        foreach($people as $person2 => $email) {
            echo $person2 . ' : ' . $email;
            echo '<br>';
        }
    ?>
</body>
</html>
