<!-- เอาข้อมูลใน session ออก -->
<?php
    /*1. session_start();
     unset($_SESSION['name']); //ถ้าหากunsetไปหน้าที่ขึ้นชื่อก็จะerror
     unset($_SESSION['email']);*/ 

    //2. วิธีแก้โค้ดให้สั้นลงลบล้างข้อมูลไปเลย ผลลัพธ์เหมือนกับด้านบน 
    session_start();
    session_destroy();

?>