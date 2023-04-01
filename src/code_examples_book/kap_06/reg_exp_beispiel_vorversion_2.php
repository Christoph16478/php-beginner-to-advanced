<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Inhalte von Absätzen auslesen</title>
</head>
<body>
<?php
$muster = "@<p[^>]*>.*</p>@U"; 
$in = "<p class='example'>Ein Absatz und das geht gleich weiter</p><p>Hier folgt der zweite</p><p>Und ein dritter</p>"; 
echo "\n<br />\n\n";
if(preg_match_all($muster, $in, $treffer)) { 
  echo "$muster passt auf '$in'<br />\n"; 
  print_r($treffer); 
}


?>
</body>
</html>