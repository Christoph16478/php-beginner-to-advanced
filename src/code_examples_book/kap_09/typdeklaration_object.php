<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>Typdeklaration</title>
</head>
<body>
<?php
function akzeptiertObjekt(object $obj) { 
  echo "nur Objekte können übergeben werden";
}
akzeptiertObjekt(new StdClass());

// das folgende geht nicht
//akzeptiertObjekt("Ein String");
?>
</body>
</html>
