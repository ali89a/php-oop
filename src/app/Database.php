<?php

namespace App;

use PDO;

class Database
{
    protected $servername = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $database_name = "cake-town";
    protected $conn;

    function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->database_name",$this->username,$this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}