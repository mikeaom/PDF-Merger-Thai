#PDFMerger สำหรับ PHP (PHP 5 ขึ้นไปถึง PHP 7.1 และ PHP 8)

PDFMerger สร้างขึ้นโดย Jarrod Nettles ธันวาคม 2009 jarrod@squarecrow.com

อัปเดตโดย Supskon Suwan กรกฏาคม 2565 mai.supakon@gmail.com

- ใช้ tcpdf 6.2.12 โดย Nicola Asuni
- ใช้แพทช์ tcpdi_parser 1.0 โดย Paul Nicholls พร้อม TCPdiParserException ของตัวเอง
- ใช้ TCPDI 1.0 โดย Paul Nicholls พร้อมส่วนขยาย FPDF_TPL 1.2.3 โดย Setasign

## รองรับ PHP 5,6,7 และ 8

ฉันได้ทำการเปลี่ยนแปลงบางอย่างในรหัสดั้งเดิมเพื่อให้ PHPMerger เข้ากันได้กับ PHP 5

- อัปเดต

ฉันทดสอบด้วย PHP 7.2.34 บนเครื่องของฉันแล้วก็ยังใช้งานได้

## รองรับ PDF 1.5 และ PDF 1.6

ไลบรารี FPDF และ FPDI ถูกแทนที่ด้วย TCPDF ด้วยส่วนขยาย TCPDI และ parser

### การใช้เนมสเปซ

```php
require_once ('PDFMerger/PDFMerger.php');

use PDFMerger\PDFMerger;
$pdf = new PDFMerger;

$pdf->addPDF('pdf/1.pdf');
$pdf->addPDF('pdf/1.pdf');

$pdf->merge('download','merged.pdf');
```

### ตัวอย่างการใช้งาน
```php
include 'PDFMerger.php';

$pdf = new PDFMerger; // or use $pdf = new \PDFMerger; for Laravel

$pdf->addPDF('samplepdfs/one.pdf', '1, 3, 4');
$pdf->addPDF('samplepdfs/two.pdf', '1-2');
$pdf->addPDF('samplepdfs/three.pdf', 'all');


$pdf->merge('file', 'samplepdfs/TEST2.pdf'); // generate the file

$pdf->merge('download', 'samplepdfs/test.pdf'); // force download

// REPLACE 'file' WITH 'browser', 'download', 'string', or 'file' for output options
```
