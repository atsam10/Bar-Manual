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
    $sno = ucwords( $_POST['searchbar']); //captalises each letter from begining of the word 
    $search_query = "M_Name";
    if ($sno=="Tropical Thunder" || $sno=="Coriander And Coconut Virgin Mojito" || $sno=="Cool As Cucumber" || $sno=="Bollywood Smash" ) {
        $type = "Mocktaiks";

    } else {
       
        $type = "Cocktaiks";
    }
    $sno = "'%".$sno."%'";
    $operation = "like";
    // echo $sno;
  
} 



$sql = "SELECT `s.no`, `M_Name`, `ingrdients`, `How_to_make` FROM `" . $type . "` WHERE `" . $search_query . "`". $operation  . $sno . ";";
//$sql = "SELECT `s.no`, `M_Name`, `ingrdients`, `How_to_make` FROM `Cocktaiks` WHERE M_Name LIKE '%Lychee Bellini%'";
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
    
    $title =  "Couldnt find any thing called " . $_POST['searchbar'] ;

}

