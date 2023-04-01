<?php
$datei = "bilder/bild_07.jpg";
$bild = imagecreatefromjpeg($datei);

imageflip($bild, IMG_FLIP_VERTICAL);

header("Content-type: image/jpg");
imagejpeg($bild);
imagedestroy($bild);
