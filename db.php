<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bar manual";
$name = "";
$Ingredients = "";
$Procedure = "";
$result;
$sql;
// Create connection

$conn;



$conn = new mysqli($servername, $username, $password, $dbname);
$sno = $_POST['drink'];

if($sno<10){
    $type="Mocktaiks";
}else{
    $sno=$sno - 10 ; 
    $type="Cocktaiks";
}



$sql = "SELECT `s.no`, `M_Name`, `ingrdients`, `How_to_make` FROM `".$type."` WHERE `s.no`=". $sno . ";";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $name = $row["M_Name"];
        $Ingredients  = $row["ingrdients"];
        $Procedure = $row["How_to_make"];
    }
} else {
    echo "0 results";
}
