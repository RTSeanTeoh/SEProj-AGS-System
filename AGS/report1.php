<?php 
require('../assets/fpdf/fpdf.php');








//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm
$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();

//Cell(width , height , text , border , end line , [align] )
$pdf->SetFont('Arial','B',32);

$pdf->SetTextColor(0,0,0);

$pdf->Cell(59	,35,'Report Data',0,1);//end of line
$pdf->Image('word1.png',15,40,);
$pdf->Image('data1.png',15,50,);
$pdf->AddPage();
$pdf->Image('word2.png',15,30,);

$pdf->Image('data2.png',15,40,);
$pdf->Image('word3.png',15,200,);
$pdf->Image('data3.png',15,210,);


$pdf->Output();
?>