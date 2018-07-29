<?php
    include_once 'db_connect.inc.php';

    $sql="SELECT option1,option2,option3,option4,ans from questions";
    $result=mysqli_query($conn,$sql);
    $respStr="";
    while($row=mysqli_fetch_row($result)){
        for($i=0;i<3;$i=$i+1){
            if($row[$i]==$row[4])
                $respStr=$respStr+$i;
        }
    }
    echo $respStr;
    ?>