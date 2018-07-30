<?php

require('fpdf/fpdf.php');
include_once 'includes/db_connect.inc.php';
class PDF extends FPDF{
    function Header()
    {
        $this->Image('college.png',8,8,30);
        $this->SetFont('Arial','',15);
        $this->Cell(80);
        $this->Cell(55,20,"ST.THOMAS' COLLEGE OF ENGINEERING AND TECHNOLOGY",0,0,'C');
        $this->Ln(17);

        $this->SetFont('Arial','',12);
        $this->Cell(80);
        $this->Cell(55,0,"4, DIAMOND HARBOUR ROAD, KIDDERPORE, KOLKATA-70003",0,0,'C');

        $this->Ln(12);
        $this->SetFont('Arial','U',12);
        $this->Cell(80);
        $this->Cell(35,0,"Academic Year - 2018-19",0,0,'C');

        $this->Ln(10);
       // $this->SetFont('Arial','U',12);
        $this->Cell(0);
        $this->Rect(5,50,200,0,'DF');

        $this->Ln(8);

        $this->SetFont('Arial','',12);
        $this->Cell(75);
        $this->Cell(45,0,"First Year Induction Programme",0,0,'C');
        $this->Ln(5);
        $this->SetFont('Arial','',12);
        $this->Cell(75);
        $this->Cell(45,0,"Assessment Result",0,0,'C');
        $this->Ln(5);

    }
    function Footer(){
        $this->SetY(-15);
        $this->SetFont('Arial','',12);
        $this->Cell(0,10,"Page : ".$this->PageNo().'/{nb}',0,0,'C');
    }
    
}
$header=array("NAME","DEPARTMENT","PHYSICS","CHEMISTRY","MATHEMATICS","ENGLISH","TOTAL");

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Cell(14);
$pdf->SetFont('Arial','',8);
foreach($header as $heading){
    $pdf->Cell(22,12, $heading,1,0,'C');


}

$sql = "SELECT name,dept_id,dept_name,physics,chemistry,maths,english,(physics+chemistry+maths+english) as total  from (select * from student_master natural join department_master) as interm left JOIN results_master on interm.student_id=results_master.student_id ORDER BY dept_id;";

$result=mysqli_query($conn,$sql);
$output=Array();
while($row=mysqli_fetch_assoc($result)){
    array_push($output,$row);
}

$i=1;

foreach($output as $result){
    $pdf->Ln();
    $pdf->Cell(14);
   // $pdf->Cell(22,8, $i.'',1,0,'C');
    $pdf->Cell(22,8, $result['name'],1,0,'C');
    $pdf->Cell(22,8, $result['dept_id'],1,0,'C');
    $pdf->Cell(22,8, $result['physics'],1,0,'C');
    $pdf->Cell(22,8, $result['chemistry'],1,0,'C');
    $pdf->Cell(22,8, $result['maths'],1,0,'C');
    $pdf->Cell(22,8, $result['english'],1,0,'C');
    $pdf->Cell(22,8, $result['total'],1,0,'C');
    $i=$i+1;
    if($i==25*$pdf->PageNo()){
        $pdf->AddPage();

    }
}

//$pdf->AddPage();



$pdf->Output();
//$header={"SL. NO","NAME","DEPARTMENT","PHYSICS","CHEMISTRY","MATHEMATICS","ENGLISH","TOTAL"};




?>