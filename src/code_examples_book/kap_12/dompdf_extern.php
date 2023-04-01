<?php
require "vendor/autoload.php";

use Dompdf\Dompdf;
use Dompdf\Options;
//Dompdf muss vorher mit Composer installiert sein!
$options = new Options();

//Pfad anpassen!
$options->set("chroot", "C:\xampp\htdocs");

$dompdf = new Dompdf($options);

$dompdf->loadHtmlFile("beispiel.html");

$dompdf->setPaper("A4", "landscape");

$dompdf->render();

$dompdf->stream("beispiel");