<?php
/**
* This class provides functions to deal with the database.
*/

class Database
{
    // private variables
    private $host; # hostname
    private $db; # name of database

    private $user; # name of user
    private $pwd; # password of user. Can be set via XAMMP
    
    private $con; # Connection
    private $port = 3306; # default port for MySQL (XAMPP control panel)
  
    /**
    * Initialize with parameters to connect to the database
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
            $this->open();
        } 
    }

    /**
    * Connect to db
    */
    function open()
    {
        $this->con = new mysqli($this->host, $this->db, $this->user, $this->pwd, $this->port);
    }

    /**
    * Execute your query
    */
    function query( $query )
    {
        return $this->con->query( $query ); # &query is the sql statement
    }

    /**
     * Close connection
    */
    function close()
    {
        $this->con->close();
    }
}
?>