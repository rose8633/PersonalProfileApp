<?php

//Modified connect file with a class to handle connection, read and write operations in a database


class Database {

    private $host = "localhost"; 
    private $username = "root";
    private $password = "";
    private $db ="profiles_db";

    //handles connection
    function connect(){
        $connection = mysqli_connect($this->host,$this->username,$this->password,$this->db);
        return $connection;
    }

    //handles read operations
    function read($query){
        $conn = $this->connect();
        $result = mysqli_query($conn, $query);
        if (!$result){
            return false;
        }else
        {
            $data = false;
            while($row = mysqli_fetch_assoc($result)){

                $data[] = $row;
               
            }

            return $data;
        }

    }

    //handles write operations
    function write($query){
        $conn = $this->connect();
        $result = mysqli_query($conn, $query);
        if (!$result){
            return false;
        }else
        {
            return true;
        }
    }

}
 
