<?php
require('fpdf186/fpdf.php');
$conn=new mysqli('localhost','root','','highlow');

if($conn->connect_errno)
{
    die("Error");
}
$sql="SELECT * FROM `user` ORDER BY id";

$result=$conn->query($sql);
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',14);
foreach($row=$result->fetch_object() as $user){
    $id = $row->id;
    $name = $row->first_name;
    $address = $row->last_name;
    $phone = $row->email;
    $pdf->Cell(20,10,$id,1);
    $pdf->Cell(40,10,$name,1);
    $pdf->Cell(80,10,$address,1);
    $pdf->Cell(40,10,$phone,1);
    $pdf->Ln();
}
$pdf->Output();

