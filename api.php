<?php
include 'PDFMerger.php';

use PDFMerger\PDFMerger;

$pdf = new PDFMerger;

$pdf->addPDF('pdf/1.pdf');
$pdf->addPDF('pdf/2.pdf');

// $pdf->merge('open', 'TEST1.pdf'); // generate the file
// $pdf->merge('file', 'C:\xampp\htdocs\test\sumpdf\PDFMerger-master\TEST.pdf'); // force download
$pdf->merge('browser', 'TEST.pdf'); // force browser download
// $pdf->merge('string'); // return the merged PDF as a string
?>