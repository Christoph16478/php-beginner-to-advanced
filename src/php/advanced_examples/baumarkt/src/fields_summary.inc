<?php
/*
 * Datei: fields_summary.inc
 * Zweck: Erzeugt die fuer die Anzeige einer Zusammenfassung
 *        der Bestellung erforderlichen Arrays.
 */
include_once("summary_page.inc");
$page = array(
    "title" => "Der Baumarkt - Bestellung",
    "top" => "Der Baumarkt - Bestellung",
    "top2" => "Zusammenfassung der Bestellung",
    "bottom" => "Bei Fragen oder Problemen wenden Sie
                sich an admin@Baumarkt.de" 
);
$table_headers = array(
    "Pos.","Kat.Nr.","Bezeichnung","Menge","Preis","Gesamt"
);
$order_number = $_SESSION['bestell_nr'];
$shipping_rate = .25;
$table_name = $order_number;
?>