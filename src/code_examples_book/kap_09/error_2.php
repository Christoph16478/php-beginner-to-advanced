<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Error</title>
  
</head>
<body>
<?php

class Ressource
{
  public function __construct()
  {
    echo "Ressourcen nutzen<br />";
  }
  public function __destruct()
  {
    echo "Ressourcen freigeben<br/>";
  }
}
try {
  $ressource = new Ressource();
  problem();
} catch (Throwable $e) {
  echo $e->getMessage() . "<br />";
} finally {
  echo "Finally aufgerufen<br />";
}
?>

</body>
</html>
