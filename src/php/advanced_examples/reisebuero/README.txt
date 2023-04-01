Angebote eines Reisebueros
--------------------------
WICHTIG: Bevor Sie die Seite aufrufen, stellen Sie sicher, dass eine Internetverbindung
         vorhanden ist, denn ansonsten wird CSS Bootstrap nicht eingebunden.

Projektstruktur:
* reisebuero/ - Wurzelordner
  * documentation/ - Dateien der Projektdokumentation
    * VORUEBERLEGUNGEN.txt - Vorüberlegungen zum Projekt
  * resources/
    * css/
      * blink.css - Beinhaltet Funktionalität um einen button auf der Webseite blinken zu lassen
    * db/
      * reisen.sql - Sicherheitskopie der Datenbank 'reisebuero'
    * images/ - Bilder der Webseite
  * src/
    * classes/
      * Database.php - Funktionen für Datenbankoperationen
    * include/
      * include_bootstrap.php - Bootstrap wird hier inkludiert
      * include_footer.php - Footer für die Webseite
      * include_header.php - Header für die Webseite
    * index.php - Einstiegspunkt des Programms
    * voyages.php - Anzeige der Datenbank und der Gesamtzahl der Einträge
    * index.php - Presentation of database content
  * README.txt - Bietet einen Überblick der Projektstruktur


