<?php
    include_once 'db_connect.inc.php';

    $sql="SELECT opt1,opt2,opt3,opt4,ans from questions_master;";
    $result=mysqli_query($conn,$sql);
    $respStr="";
    while($row=mysqli_fetch_row($result)){
        for($i=0;$i<=3;$i=$i+1){
            if($row[$i]===$row[4])
                $respStr=$respStr . ''. $i;
        }
    }
    echo $respStr.'\n';
    echo strlen($respStr);
    ?>