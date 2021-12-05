<?php
include "config.php";

if (!empty($_GET["eid"])){
    $eid = $_GET["eid"];
    
    $sql_comment = "SELECT * FROM doctor INNER JOIN employee ON doctor.e_id = employee.e_id WHERE doctor.e_id = '".$eid."' ";

    if (!empty($_GET["pro"])) {
        $pro = $_GET["pro"];
        $sql_comment .= " AND doctor.profession = '".$pro."' ";
    }

    $myresult = mysqli_query($db,$sql_comment);

    while($rows = mysqli_fetch_assoc($myresult)){
        echo $rows["e_id"] . " - " . $rows["name"] . " - " . $rows["age"] . " - " . $rows["salary"] . " - " . $rows["profession"] . "<br>";
    }
}
else {
    $sql_comment = "SELECT * FROM doctor INNER JOIN employee ON doctor.e_id = employee.e_id ";

    if (!empty($_GET["pro"])) {
        $pro = $_GET["pro"];
        $sql_comment .= " WHERE doctor.profession = '".$pro."' ";
    }

    $myresult = mysqli_query($db,$sql_comment);

    while($rows = mysqli_fetch_assoc($myresult)){
        echo $rows["e_id"] . " - " . $rows["name"] . " - " . $rows["age"] . " - " . $rows["salary"] . " - " . $rows["profession"] . "<br>";
    }
}


?>
