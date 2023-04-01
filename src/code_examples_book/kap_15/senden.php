<?php
//E-Mail-Versand etc.
echo "Ihre Daten:<br> ";
foreach ($_POST as $name => $wert) {
    echo htmlspecialchars($name)
        . ": "
        . htmlspecialchars($wert)
        . "<br>";
}

