<?php
class dbConnect{
    function __construct()
    {
        require_once ('dbconf.php');
        $conn = mysqli_connect("localhost","root", "root", "saurabhproject");
        $this->conn=$conn;
        if(!$this->conn){
            echo "database not connected";
        }
        return $this->conn;
    }

}