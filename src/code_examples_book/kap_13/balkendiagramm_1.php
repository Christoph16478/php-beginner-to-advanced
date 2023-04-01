<?php
header ("Content-type: image/png");
require "jpgraph/src/jpgraph.php";
require "jpgraph/src/jpgraph_bar.php";

$daten = [50, 30, 60];
$graph = new Graph(260, 200, "PNG");    
$graph->SetScale("textlin");
$bplot = new BarPlot($daten);
$graph->Add($bplot);
$graph->Stroke();

