<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Zufallsbilder</title> 
</head>
<body>
<?php
$bilder = [ 
               ["pfad"  => "blumen.jpg",
                     "alt"   => "rote Blumen", 
                     "titel" => "Strauß aus roten Blumen"],
               ["pfad"  => "landschaft.jpg", 
                     "alt"   => "Landschaft", 
                     "titel" => "Landschaft im Nebel"],
               ["pfad"  => "stadt_am_meer.jpg", 
                     "alt"   => "Häuser",
                     "titel" => "Griechische Häuser am Abend"],
               ["pfad"  => "strand.jpg", 
                     "alt"   => "Strand",
                     "titel" => "Strand mit Bergen"], 
               ["pfad"  => "boot.jpg", 
                     "alt"   => "Boot", 
                     "titel" => "Boot auf einem Felsen"]
           ];

$max = count($bilder)-1;
$zufallszahl = rand(0, $max);
echo "<img src='{$bilder[$zufallszahl]['pfad']}' 
      height='200' width='150' 
      alt='{$bilder[$zufallszahl]['alt']}'
      title='{$bilder[$zufallszahl]['titel']}' />\n";
//Alternative Schreibweise
/*echo "<img src='" . $bilder[$zufallszahl]["pfad"] .
      "' height='200' width='150' alt='" . 
      $bilder[$zufallszahl]["alt"] . 
      "' title='" .
      $bilder[$zufallszahl]["titel"] .
      "' />\n";
*/
?>
</body>
</html>
