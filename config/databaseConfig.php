<?php

// ====== Class ======

class DatabaseConfig {
    
    private $host = "localhost";
    private $username = "root";
    private $password = "root";
    private $dbName = "kbooks";
    //private $port = 3308;

    
    public function connect() {

        // create new database connection object
        $conn = new mysqli($this->host, $this->username, $this->password, $this->dbName);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error); //die function to close connection in case of error
        } else {
            return $conn;
        }
    }
}