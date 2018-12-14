
<?php

displayTable();
function displayTable(){

    $servername = "cssrvlab01.utep.edu";
    $username = "kjvaldez";
    $password = "Sasuke99!";
    $dbname = "kjvaldez_db";

// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM kjvaldez_db.studentdata";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        echo "<div style = 'display: inline-block; overflow: hidden; height: auto;'>
                <table>
                   <tr>
                       <th>Annual</th>
                       <th>Term</th>
                       <th>Lastname</th>
                       <th>Name</th>
                       <th>Major</th>
                       <th>Level</th>
                       <th>Degree</th>
                       <th>Student_id</th>
                   </tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                      <td>".$row['Annual']."</td>
                      <td>".$row["Term"]."</td>
                      <td>".$row["Lastname"]."</td>
                      <td>".$row["Name"]."</td>
                      <td>".$row["Major"]."</td>
                      <td>".$row["Level"]."</td>
                      <td>".$row["Degree"]."</td>
                      <td>".$row["Student_id"]."</td>
                  </tr>";
        }
        echo "</table>	
       <a href='../private/interface.html'> filter 	
     </div>";

    }

    if($_SERVER["REQUEST_METHOD"]=="POST"){



        if(isset($_POST["ids"])){

            $IDs = $_POST["ids"];

            $sql = "SELECT * FROM kjvaldez_db.studentdata WHERE  Id = '".$IDs."' ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                echo "<table><tr><th>Year</th><th>term</th><th>Lastname</th><th>Name</th><th>Major</th><th>Level</th><th>Degree</th></tr>";
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>".$row["﻿Year"]."</td><td>". $row["term"]."</td><td>". $row["Lastname"]."</td><td>".$row["Name"]."</td><td>".$row["Major"]."</td><td>".$row["Level"]."</td><td>".$row["Degree"]."</td><td>".$row["student_id"]."</td></tr>";
                }
                echo "</table>";
            }

        }


        if(isset($_POST["lastname"])){

            $lastname = $_POST["lastname"];

            $sql = "SELECT * FROM kjvaldez_db.studentdata WHERE  Lastname = '".$lastname."' ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                echo "<table><tr><th>Term</th><th>Id</th><th>Lastname</th><th>Name</th><th>Major</th><th>Level</th><th>Degree</th></tr>";
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>".$row["﻿Year"]."</td><td>". $row["term"]."</td><td>". $row["Lastname"]."</td><td>".$row["Name"]."</td><td>".$row["Major"]."</td><td>".$row["Level"]."</td><td>".$row["Degree"]."</td><td>".$row["student_id"]."</td></tr>";
                }
                echo "</table>";
            }

        }


        if(isset($_POST["name"])){

            $name = $_POST["name"];

            $sql = "SELECT * FROM kjvaldez_db.studentdata WHERE  Name = '".$name."' ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                echo "<table><tr><th>Term</th><th>Id</th><th>Lastname</th><th>Name</th><th>Major</th><th>Level</th><th>Degree</th></tr>";
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>".$row["﻿Year"]."</td><td>". $row["term"]."</td><td>". $row["Lastname"]."</td><td>".$row["Name"]."</td><td>".$row["Major"]."</td><td>".$row["Level"]."</td><td>".$row["Degree"]."</td><td>".$row["student_id"]."</td></tr>";
                }
                echo "</table>";
            }

        }



        if(isset($_POST["major"])){

            $major = $_POST["major"];

            $sql = "SELECT * FROM kjvaldez_db.studentdata WHERE  Major = '".$major."' ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                echo "<table><tr><th>Term</th><th>Id</th><th>Lastname</th><th>Name</th><th>Major</th><th>Level</th><th>Degree</th></tr>";
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>".$row["﻿Year"]."</td><td>". $row["term"]."</td><td>". $row["Lastname"]."</td><td>".$row["Name"]."</td><td>".$row["Major"]."</td><td>".$row["Level"]."</td><td>".$row["Degree"]."</td><td>".$row["student_id"]."</td></tr>";
                }
                echo "</table>";
            }

        }


        if(isset($_POST["level"])){

            $level = $_POST["level"];

            $sql = "SELECT * FROM kjvaldez_db.studentdata WHERE  Level = '".$level."' ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                echo "<table><tr><th>Term</th><th>Id</th><th>Lastname</th><th>Name</th><th>Major</th><th>Level</th><th>Degree</th></tr>";
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>".$row["﻿Term"]."</td><td>". $row["Id"]."</td><td>". $row["Lastname"]."</td><td>".$row["Name"]."</td><td>".$row["Major"]."</td><td>".$row["Level"]."</td><td>".$row["Degree"]."</td></tr>";
                }
                echo "</table>";
            }

        }


        if(isset($_POST["degree"])){

            $degree = $_POST["degree"];

            $sql = "SELECT * FROM kjvaldez_db.studentdata WHERE  Degree = '".$degree."' ";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                echo "<table><tr><th>Term</th><th>Id</th><th>Lastname</th><th>Name</th><th>Major</th><th>Level</th><th>Degree</th></tr>";
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>".$row["﻿Term"]."</td><td>". $row["Id"]."</td><td>". $row["Lastname"]."</td><td>".$row["Name"]."</td><td>".$row["Major"]."</td><td>".$row["Level"]."</td><td>".$row["Degree"]."</td></tr>";
                }
                echo "</table>";
            }

        }


        if(isset($_POST["attribute"])){

            $attribute = $_POST["attribute"];

            $sql = "SELECT * FROM kjvaldez_db.studentdata ORDER BY $attribute ASC";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                echo "<table><tr><th>Term</th><th>Id</th><th>Lastname</th><th>Name</th><th>Major</th><th>Level</th><th>Degree</th></tr>";
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>".$row["﻿Term"]."</td><td>". $row["Id"]."</td><td>". $row["Lastname"]."</td><td>".$row["Name"]."</td><td>".$row["Major"]."</td><td>".$row["Level"]."</td><td>".$row["Degree"]."</td></tr>";
                }
                echo "</table>";
            }

        }


        if(isset($_POST["attributee"])){

            $attributee = $_POST["attributee"];

            $sql = "SELECT * FROM kjvaldez_db.studentdata ORDER BY $attributee DESC";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                echo "<table><tr><th>Term</th><th>Id</th><th>Lastname</th><th>Name</th><th>Major</th><th>Level</th><th>Degree</th></tr>";
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>".$row["﻿Term"]."</td><td>". $row["Id"]."</td><td>". $row["Lastname"]."</td><td>".$row["Name"]."</td><td>".$row["Major"]."</td><td>".$row["Level"]."</td><td>".$row["Degree"]."</td></tr>";
                }
                echo "</table>";
            }

        }



        if(isset($_POST["col"])){

            $col = $_POST["col"];

            $sql = "SELECT $col FROM kjvaldez_db.studentdata";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                echo "<table><tr><th>Term</th><th>Id</th><th>Lastname</th><th>Name</th><th>Major</th><th>Level</th><th>Degree</th></tr>";
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>".$row["﻿Term"]."</td><td>". $row["Id"]."</td><td>". $row["Lastname"]."</td><td>".$row["Name"]."</td><td>".$row["Major"]."</td><td>".$row["Level"]."</td><td>".$row["Degree"]."</td></tr>";
                }
                echo "</table>";
            }

        }



        if(isset($_POST["lim"])){

            $lim = $_POST["lim"];
            $lim = (int)$lim;

            $sql = "SELECT * FROM kjvaldez_db.studentdata LIMIT $lim";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                echo "<table><tr><th>Term</th><th>Id</th><th>Lastname</th><th>Name</th><th>Major</th><th>Level</th><th>Degree</th></tr>";
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>".$row["﻿Term"]."</td><td>". $row["Id"]."</td><td>". $row["Lastname"]."</td><td>".$row["Name"]."</td><td>".$row["Major"]."</td><td>".$row["Level"]."</td><td>".$row["Degree"]."</td></tr>";
                }
                echo "</table>";
            }

        }

    }





    $conn->close();

}

?>﻿

