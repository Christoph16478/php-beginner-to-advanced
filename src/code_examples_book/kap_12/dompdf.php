<?php
require "vendor/autoload.php";

use Dompdf\Dompdf;
//Dompdf muss vorher mit Composer installiert sein!
$dompdf = new Dompdf();

$dompdf->loadHtml("Hallo PDF-Dokument");

$dompdf->setPaper('A4', 'landscape');

$dompdf->render();

$dompdf->stream();