      <?php
        // $servername = "213.165.238.27";
        // $username = "abiralshrestha_aashish";
        // $password = "Nepal2073$";
        // $dbname = "abiralshrestha_Bar_manual";

        

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "bar manual";


        $operation = "=";
        $name = "";
        $title = "";
        $drink_num = "";
        $Ingredients = "";
        $Procedure = "";
        $result;
        $sql;
        $Procedure_class = "";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_errno) {
            echo "Failed to connect to Database: " . $conn->connect_error;
            exit();
        }

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
            $sno = ucwords($_POST['searchbar']); //captalises each letter from begining of the word 
            $search_query = "M_Name";
            if ($sno == "Tropical Thunder" || $sno == "Coriander And Coconut Virgin Mojito" || $sno == "Cool As Cucumber" || $sno == "Bollywood Smash") {
                $type = "Mocktaiks";
            } else {

                $type = "Cocktaiks";
            }
            $sno = "'%" . $sno . "%'";
            $operation = "like";
            // echo $sno;

        }



        $sql = "SELECT `s.no`, `M_Name`, `ingrdients`, `How_to_make` FROM `" . $type . "` WHERE `" . $search_query . "`" . $operation  . $sno . ";";
        //$sql = "SELECT `s.no`, `M_Name`, `ingrdients`, `How_to_make` FROM `Cocktaiks` WHERE M_Name LIKE '%Lychee Bellini%'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $title =  "Ingredients";


                $drink_num = $row["s.no"];
                $name = $row["M_Name"];
                if ($type ==  "Cocktaiks") {
                    $drink_num = $row["s.no"] + 10;
                } else {
                    $drink_num = $row["s.no"];
                }
                $Ingredients  = $row["ingrdients"];
                $Procedure = $row["How_to_make"];
                $Procedure_class = "border p-3 border-dark rounded";
            }
        } else {

            $title =  "Couldnt find any thing called " . $_POST['searchbar'];
        }
