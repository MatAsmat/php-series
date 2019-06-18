<!-- ตอนที่ 6 เงื่อนไขและเคส(If Else & Switch) -->
- Operators =, == , ===, <, >, ... 
<!DOCTYPE html><html><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title></head>
<body>
    <?php
// If Else Case
        $num = 5;
        if ($num == 5) {
            echo "5 passed";
        }
    // =========================
        $num = '5';
        if ($num === 5) {
            echo "5 passed";
        } else {
            echo "5 not passed";
        }
    // =======================
        $num = 7;
        if ($num == 5) {
            echo "5 passed";
        } elseif ($num == 6) {
            echo "6 passed";
        } else {
            echo "Not passed";
        }
    // ==================================
// Switch Case
        $FavCar = "toyota";
        switch($FavCar) {
            case "honda":
                echo "Your favorite car is honda";
                break;
            case "toyota":
                echo "Your favorite car is toyota";
                break;
            case "ford":
                echo "Your favorite car is ford";
                break;
            default:
                echo "You don't have favorite car";
        } 
    ?>
</body>
</html>