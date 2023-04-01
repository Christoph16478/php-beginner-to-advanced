<?php
/**
 * Datei: connect_to_db.inc
 * Zweck: Verbindung zu einer MySQL-Datenbank herstellen. Der Name
 *        einer Datei mit den Datenbankvariablen wird der Funktion uebergeben.
 */
function connect_to_db($filename)
{
    include($filename);
    $connection = mysqli_connect($host,$user,$passwd) or die ('Keine Verbindung zum Server');
    $db = mysqli_select_db($connection,$database) or die ("DDatenbank nicht verf&uuml;gbar.");
    return $connection;
}
?>