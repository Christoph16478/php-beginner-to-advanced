<?php
require_once("classes/fpdf.php");

$pdf=new FPDF;
//Seite hinzufügen
$pdf->AddPage();
//Schrift definieren
$pdf->SetFont("Arial","B",16);
//Schreibe in eine Zelle
$pdf->Cell(80,20, "Hallo",0,1);


$pdf->Output("test.pdf","I");
?>