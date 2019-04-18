<?php

require('fpdf.php');
$Date = date("Y-m-d");

//Connecting Database
require_once('../db.php');

require_once('../../methods/DB.class.php');
require_once('../../methods/Main.class.php');

$main = new Main;
$DB = new DB;
$DB->conn = $conn;

$arr = $DB->select("customer","");

$pdf = new FPDF('L','mm','A4');
$pdf->AddPage("L",'A4');
$pdf->SetFont('Times','B',18);
$pdf->Cell('',10,"Customers(".$Date.')','','',"C");

$pdf->ln(20);
$pdf->SetFont('Times','B',12);
$pdf->Cell(10,10,'#','1','',"L");
$pdf->Cell(60,10,'Name','1','',"L");
$pdf->Cell(20,10,'TP','1','',"L");
$pdf->Cell(105,10,'Address','1','',"L");
$pdf->Cell(20,10,'Reg.Date','1','',"L");
$pdf->Cell(30,10,'NIC','1','',"L");
$pdf->Cell(15,10,'Area','1','',"L");
$pdf->Cell(15,10,'Status','1','',"L");

$pdf->SetFont('Times','',10);
$pdf->ln(4);

foreach ($arr as $data) {
	
	$pdf->ln(6);
	$pdf->Cell(10,6,$data['id'],'1','',"L");
	$pdf->Cell(60,6,$data['name'],'1','',"L");
	$pdf->Cell(20,6,$data['tp'],'1','',"L");
	$pdf->Cell(105,6,$data['address'],'1','',"L");
	$pdf->Cell(20,6,$data['regdate'],'1','',"L");
	$pdf->Cell(30,6,$data['nic'],'1','',"L");
	$pdf->Cell(15,6,$data['areaid'],'1','',"L");
	$pdf->Cell(15,6,$data['status'],'1','',"L");
	
}

$main->pdfFooter($pdf);

$pdf->Output('',"Customers(".$Date.').pdf',true);

//Cell(float w [, float h [, string txt [, mixed border [, int ln [, string align [, boolean fill [, mixed link]]]]]]])

?>