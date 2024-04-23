<?php

require('fpdf.php');

$pdf = new FPDF('P', 'mm', 'A4');
$pdf ->AddPage();

$pdf ->SetFont('times','B',13);
$pdf ->Cell(200,10,'DATA',0,0,'C');
$pdf ->Image('unpam.png',1,1,20,20);

$pdf ->Cell(10, 15, '',0,1);
$pdf->SetFont('Times','B','9');

$pdf ->Cell(10,7,'NO.',1,0,'C');
$pdf ->Cell(90,7,'NAMA.',1,0,'C');
$pdf ->Cell(90,7,'ALAMAT.',1,0,'C');

$pdf ->Cell(10,7,'',0,1,) ;
$pdf->SetFont('Times','',10);

$no = 1;
$koneksi = mysqli_connect('localhost','root','','db_user');
$data = mysqli_query($koneksi,"select * from tbl_input");
    foreach ($data as $row) {
        $pdf->Cell(10, 6, $row['no'], 1, 0, 'C');
        $pdf->Cell(90, 6, $row['nama'], 1, 0, 'C');
        $pdf->Cell(90, 6, $row['alamat'], 1, 1, 'C');
    }


$pdf ->Output();