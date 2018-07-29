<?php
    require 'vendor/autoload.php';
    include_once "includes/db_connect.inc.php";
    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;    
    $spreadsheet = new Spreadsheet();
    
    $spreadsheet->setActiveSheetIndex(0);
    $sheet = $spreadsheet->getActiveSheet();
    
    

    $sql = "SELECT reg_no,name,dept_name,physics,chemistry,maths,english,(physics+chemistry+maths+english) as total from (select * from student_master natural join department_master) as interm left JOIN results_master on interm.student_id=results_master.student_id ORDER BY dept_id;";

    $result=mysqli_query($conn,$sql);
    $output=Array();
    while($row=mysqli_fetch_row($result)){
        array_push($output,$row);
    }
    
   
    
    $max=count($output);
    $sheet->setCellValueByColumnAndRow(1,1,'Registration No.');
    $sheet->setCellValueByColumnAndRow(2,1,'Name');
    $sheet->setCellValueByColumnAndRow(3,1,'Department');
    $sheet->setCellValueByColumnAndRow(4,1,'Physics');
    $sheet->setCellValueByColumnAndRow(5,1,'Chemistry');
    $sheet->setCellValueByColumnAndRow(6,1,'Maths');
    $sheet->setCellValueByColumnAndRow(7,1,'English');
    $sheet->setCellValueByColumnAndRow(8,1,'Total');
    

    for($i=0;$i<$max;$i=$i+1){
        for($j=0;$j<8;$j=$j+1){
            $sheet->setCellValueByColumnAndRow($j+1,$i+2,$output[$i][$j]);
        }
    }
    $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
    header('Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="test.xlsx"');
    header('Cache-Control: max-age=0');
    $writer->save('php://output');
    ?>
