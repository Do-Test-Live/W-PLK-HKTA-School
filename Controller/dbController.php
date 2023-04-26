<?php
class DBController {
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "plk_sound_school";
    private $conn;

    function __construct() {
        if($_SERVER['SERVER_NAME']=="school.ngt.hk"||$_SERVER['SERVER_NAME']=="www.school.ngt.hk"){
            $this->host = "localhost";
            $this->user = "ugu1n7agaeeni";
            $this->password = ")@y=29nDeA(5";
            $this->database = "dbsztvuggiyqwg";
        }

        $this->conn = $this->connectDB();
    }

    function connectDB() {
        $conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
        return $conn;
    }

    function checkValue($value) {
        $value=mysqli_real_escape_string($this->conn, $value);
        return $value;
    }

    function runQuery($query) {
        $result = mysqli_query($this->conn,$query);
        while($row=mysqli_fetch_assoc($result)) {
            $resultset[] = $row;
        }
        if(!empty($resultset))
            return $resultset;
    }

    function insertQuery($query) {
        $result = mysqli_query($this->conn,$query);
        return $result;
    }
    function numRows($query) {
        $result  = mysqli_query($this->conn,$query);
        $rowcount = mysqli_num_rows($result);
        return $rowcount;
    }
}
