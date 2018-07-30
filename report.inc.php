<?php
    include_once "db_connect.inc.php";

    $sql = "SELECT reg_no,name,dept_id,dept_name,physics,chemistry,maths,english,(physics+chemistry+maths+english) as total from (select * from student_master natural join department_master) as interm left JOIN results_master on interm.student_id=results_master.student_id ORDER BY dept_id;";

    $result=mysqli_query($conn,$sql);
    $output=Array();
    while($row=mysqli_fetch_assoc($result)){
        array_push($output,$row);
    }
    echo json_encode($output);
    ?>