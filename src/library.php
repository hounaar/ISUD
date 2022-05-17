<?php
session_start();

class library{
    public function connection($username, $password,$dbname){
        $connect = new mysqli("localhost",$username,$password,$dbname) or die("cannot connect".$connect->connect_error);
    }
    public function selectOneTuple($username,$password,$dbname,$option,$tablename,$condition,$col){
        $connection = $this->connection("localhost",$username,$password,$dbname);
        $query = "SELECT $option FROM $tablename WHERE $condition";
        if($connection->query($query)){
            while($row = $connection->fetch_assoc()){
                $row["$col"] = $_SESSION["$col"];
            }
        } else {
            echo "Cannot select the data";
        }
    }
    public function selectAllTuples($username,$password,$dbname,$tablename,$condition,$col){
        $connection = $this->connection("localhost",$username,$password,$dbname);
        $query = "SELECT * FROM $tablename WHERE $condition";
        if($connection->query($query)->num_rows>0){
            while($row = $connection->fetch_assoc()){
                echo "Got it";
                $row["$col"] = $_SESSION["$col"];
            }
        } else {
            echo "Cannot select the data";
        }
    }
    public function insertOneTuples($username,$password,$dbname,$tablename,$onevalue,$col){
        $connection = $this->connection("localhost",$username,$password,$dbname);
        $query = "INSERT INTO $tablename VALUES ('$onevalue')";
        if($connection->query($query)){
            $selector = "SELECT $onevalue FROM $tablename";
            $results = $connection->query($selector);
            if($results->num_rows> 0){
                while($row = $results->fetch_assoc()) {
                    echo "Got the info";
                    $row["$col"] = $_SESSION["$col"];
                }
            } else{
                echo "No information";
            }
        }
    }
    public function insertMultTuples($username,$password,$dbname,$tablename,$value1,$value2,$value3,$value4,$value5,$col){
        $connection = $this->connection("localhost",$username,$password,$dbname);
        $query = "INSERT INTO $tablename VALUES ('$value1', '$value2','$value3', '$value4', '$value5')";
        if($connection->query($query)){
            $selector = "SELECT * FROM $tablename";
            $results = $connection->query($selector);
            if($results->num_rows> 0){
                while($row = $results->fetch_assoc()) {
                    echo "Got the info";
                    $row["$col"] = $_SESSION["$col"];
                }
            } echo "no data with the selected format";
        }
    }
    public function updateOneTuple($username,$password,$dbname,$tablename,$col,$value1,$condition){
        $connection = $this->connection("localhost",$username,$password,$dbname);
        $query = "UPDATE $tablename SET $col = $value1 WHERE $condition";
        $results = $connection->query($query);
        if($results){
            echo "Got it";
        } else {
            echo "Something went wrong";
        }
    }
    public function updateMultTuples($username,$password,$dbname,$tablename,$value1,$value2,$value3,$value4,$value5,$col1,$col2,$col3,$col4,$col5,$condtion,$condition){
        $connection = $this->connection("localhost",$username,$password,$dbname);
        $query = "UPDATE $tablename SET $col1 = $value1,$col2 = $value2,$col3 = $value3,$col4 = $value4,$col5 = $value5 WHERE $condtion$condition";
        $results = $connection->query($query);
        if($results){
            echo "Got it";
        } else {
            echo "Something went wrong";
        }
    }
    public function deletetuple($username,$password,$dbname,$tablename,$condition){
        $connection = $this->connection("localhost",$username,$password,$dbname);
        $query = "DELETE FROM $tablename WHERE $condition";
        $results = $connection->query($query);
        if($results){
            echo "Deleted it";
        } else {
            echo "Something went wrong";
        }

    }
}

?>