<?php

class LoadDB
{
    private $servername = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbname = "Mydb";

    public function connDB(){
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        return $conn;
    }
}
?>