<?php
    session_start();
    include_once 'db_connect.inc.php';
    if($_SERVER['REQUEST_METHOD']=="POST"){
        if(isset($_POST["admin_id"])&& isset($_POST["admin_pwd"])){
            $admin_id=mysqli_real_escape_string($conn,$_POST["admin_id"]);
            $admin_pwd=mysqli_real_escape_string($conn,$_POST["admin_pwd"]);
            $sql = "SELECT * FROM admin_master where admin_id='{$admin_id}'";
            $result=mysqli_query($conn,$sql);
            if($row=mysqli_fetch_assoc($result)){
                if(password_verify($admin_pwd,$row['admin_pwd'])){
                    $_SESSION["admin_id"]=$admin_id;
                    
                    header("Location:../report.php");
                }
                else{
                    header("Location:../admin_login.php?login=pwd");
                }
            }
            else{
                header("Location:../admin_login.php?login=error");
            }
        }
    }
    ?>