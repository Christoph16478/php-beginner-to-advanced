<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Traits</title>
</head>
<body>
<?php
trait traitA  {
  public function eins() {
     echo "A eins<br />\n";
  }
}
trait traitB  {
  public function eins() {
     echo "B eins<br />\n";
  }
}

class Beispiel {
  use traitA, traitB;
}

?>
</body>
</html>