<?php
include "config.php";

if (!empty($_GET["eid"])){
    $eid = $_GET["eid"];
    
    $sql_comment = "SELECT * FROM nurse INNER JOIN employee ON nurse.e_id = employee.e_id WHERE nurse.e_id = '".$eid."'; ";

    $myresult = mysqli_query($db,$sql_comment);

    while($rows = mysqli_fetch_assoc($myresult)){
        echo $rows["e_id"] . " - " . $rows["name"] . " - " . $rows["age"] . " - " . $rows["salary"] . "<br>";
    }
}
else {
    $sql_comment = "SELECT * FROM nurse INNER JOIN employee ON nurse.e_id = employee.e_id; ";


    $myresult = mysqli_query($db,$sql_comment);

    while($rows = mysqli_fetch_assoc($myresult)){
        echo $rows["e_id"] . " - " . $rows["name"] . " - " . $rows["age"] . " - " . $rows["salary"] . "<br>";
    }
}


?>
