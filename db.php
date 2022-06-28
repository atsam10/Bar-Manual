<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bar manual";
$operation = "=";
$name = "";
$title="";
$Ingredients = "";
$Procedure = "";
$result;
$sql;


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if (!empty($_POST['drink'])) {
    $sno = $_POST['drink'];
    $search_query = "s.no";
    if ($sno < 10) {
        $type = "Mocktaiks";
    } else {
        $sno = $sno - 10;
        $type = "Cocktaiks";
    }
    $operation = "=";
}



if (!empty($_POST['searchbar'])) {
    $sno = $_POST['searchbar'];
    $search_query = "M_Name";
    if ($sno=="Tropical Thunder" || $sno=="Coriander and Coconut Virgin Mojito" || $sno=="Cool as Cucumber" || $sno=="Bollywood Smash" ) {
        $type = "Mocktaiks";

    } else {
       
        $type = "Cocktaiks";
    }
    $sno = "'%".$sno."%'";
    $operation = "like";
    echo $type;
}



$sql = "SELECT `s.no`, `M_Name`, `ingrdients`, `How_to_make` FROM `" . $type . "` WHERE `" . $search_query . "`". $operation  . $sno . ";";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $title =  "Ingredients";
        
        $name = $row["M_Name"];
        $Ingredients  = $row["ingrdients"];
        $Procedure = $row["How_to_make"];
    }
} else {
    echo "0 results";
    $title =  "Couldnt find any thing";

}
