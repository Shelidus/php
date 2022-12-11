<?php
if(!empty($_POST['submit'])){
    $name = $_POST['name'];
    $roll = $_POST["roll"];
    $class = $_POST["class"];
    $school_name= $_POST["school_name"];

// Add FPDF
require("fpdf/fpdf.php");

$pdf=new FPDF();
$pdf->AddPage();


// PDF HEADING

$pdf-> SetFont("Arial","B",15);
$pdf-> Cell(0,10,"PDF PROJECT",0,1,'C');
$pdf-> Cell(0,10,"https://blog.tithimondal.in",0,1,'C');
$pdf->Ln(5);
$pdf->Ln(5);

// Form INFORMATION

$pdf-> Cell(30,10,"Name",1,0,'C');
$pdf-> Cell(30,10,"Roll No.",1,0,'C');
$pdf-> Cell(30,10,"Class",1,0,'C');
$pdf-> Cell(0,10,"School Name",1,1,'C');

$pdf-> SetFont("Arial","B",10);

$pdf-> Cell(30,10,"$name",1,0,'C');
$pdf-> Cell(30,10,"$roll",1,0,'C');
$pdf-> Cell(30,10,"class",1,0,'C');
$pdf-> Cell(0,10,"$school_name",1,0,'C');


// for output

$pdf->output();
}




