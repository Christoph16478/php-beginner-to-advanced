<?php
/**
 * Die Klasse beitet Funktionen für die Datenbank an.
 */

class Database
{
    // private Variablen
    private $host; # Name des hostes
    private $db; # Name der Datenbank

    private $user; # Name des Benutzers
    private $pwd; # Passwort des Nutzers. Kann über XAMPP gesetzt werden.
    
    private $con; # Verbidung
    private $port = 3306; # Standard port für MySQL ( XAMPP Control Panel )
  
    /**
    * Initialisierung mit Parametern um eine Datenbankverbindung aufzubauen
    */
    function __construct($host, $db, $user, $pwd, $port = 3306, $autoconnect = true)
    {
        $this->host = $host;
        $this->db = $db;
        $this->user = $user;
        $this->pwd = $pwd;
        $this->port = $port;
        if($autoconnect)
        {
            $this->connect_to_database();
        } 
    }

    /**
    * Verbindung zur Datenbank herstellen
    */
    function connect_to_database()
    {
        $this->con = new mysqli($this->host, $this->db, $this->user, $this->pwd, $this->port);
    }

    /**
    * Abfrage ausführen
    */
    function sql_query( $query )
    {
        return $this->con->query( $query ); # $query ist das SQL Statement
    }

    /**
     * Verbidnung schließen
    */
    function close_connection_to_database()
    {
        $this->con->close();
    }
}
?>