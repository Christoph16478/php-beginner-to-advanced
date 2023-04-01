<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Beispielformular</title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
    Datei: <br/>
    <input type="hidden" name="MAX_FILE_SIZE" value="300000"/>
    <input type="file" name="datei"/><br/>
    <input type="submit" value="Hochladen"/>
</form>

<?php
if (isset($_FILES["datei"]) AND !$_FILES["datei"]["error"] AND ($_FILES["datei"]["size"] < 300000)) {
  $erlaubt = [IMAGETYPE_PNG, IMAGETYPE_JPEG, IMAGETYPE_GIF];
  $bildinfo = exif_imagetype($_FILES["datei"]["tmp_name"]);
  if (!in_array($bildinfo, $erlaubt)) {
    die("kein Bild");
  } else {
    $mime = $bildinfo;
    $mimetypen = [
      2 => "jpg",
      1 => "gif",
      3 => "png"
    ];
    $endung = $mimetypen[$mime];

    $neuername = basename($_FILES["datei"]["name"]);
    $neuername = preg_replace("/\.(jpe?g|gif|png)$/i", "", $neuername);
    $neuername = preg_replace("/[^a-zA-Z0-9_-]/", "", $neuername);
    $neuername .= ".$endung";

    $ziel = "upload/$neuername";

    while (file_exists($ziel)) {
      $neuername = "kopie_$neuername";
      $ziel = "upload/$neuername";
    }
    if (@move_uploaded_file($_FILES["datei"]["tmp_name"], $ziel)) {
      echo "Dateiupload hat geklappt";
    } else {
      echo "Dateiupload hat nicht geklappt";
    }
  }
}
?>
</body>
</html>