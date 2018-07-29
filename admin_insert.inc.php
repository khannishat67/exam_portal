<?php
    include_once 'db_connect.inc.php';
    $pwd=password_hash('12345',PASSWORD_DEFAULT);
    $sql="INSERT INTO admin_master(admin_id,admin_pwd) values('stcet','{$pwd}')";
    mysqli_query($conn,$sql);
    ?>