<?php

class bar
{



    public $servername = "localhost";
    public $username = "root";
    public $password = "";
    public $dbname = "bar manual";
    public $name = "";
    public $Ingredients = "";
    public $Procedure = "";
    public $result;
    public $sql ;
     // Create connection
    
     public $conn;



  public function get_drinks($x)
    {
            $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

       $sql = "SELECT `s.no`, `M_Name`, `ingrdients`, `How_to_make` FROM `Mocktaiks` WHERE `s.no`=" . $x . ";";
       $this->result = $this->conn->query($sql);
        if ($this->result->num_rows > 0) {
            // output data of each row
            while ($row = $this->result->fetch_assoc()) {
                $this->name = $row["M_Name"];
                $this->Ingredients  = $row["ingrdients"];
                $this->Procedure = $row["How_to_make"];
            }
        } else {
            echo "0 results";
        }
    }

}