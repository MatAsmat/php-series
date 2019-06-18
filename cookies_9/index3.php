 <!-- หากอยากเก็บข้อมูลหลายๆตัวลงบนคุกกี้ -->
<?php
    $user = ['name' => 'asmat','email' => 'mat@gmail.com','age' => 20];//1
    // การแก้ error 
    $user = serialize($user);//3
    setcookie('user', $user, time() + (86400 * 30)); //วันหมดอายุอีก 1 เดือนข้างหน้า//2
    // สร้างตัวแปร
    $user = unserialize($_COOKIE['user']);//4
    print_r($user);
    echo $user['name'];
    echo $user['email'];

?>