<?php
include "config.php";

if (!empty($_GET["pid"])){
    $pid = $_GET["pid"];
    
    $sql_comment = "SELECT * FROM attends WHERE p_id = '".$pid."' ";

    if (!empty($_GET["eid"])){
        $eid = $_GET["eid"];
        $sql_comment .= " AND e_id = '".$eid."' ";
    }

    $myresult = mysqli_query($db,$sql_comment);

    while($rows = mysqli_fetch_assoc($myresult)){
        echo $rows["p_id"] . " - " . $rows["e_id"] . "<br>";
    }
}
else {
    $sql_comment = "SELECT * FROM attends";

    if (!empty($_GET["eid"])){
        $eid = $_GET["eid"];
        $sql_comment .= " WHERE e_id = '".$eid."' ";
    }

    $myresult = mysqli_query($db,$sql_comment);

    while($rows = mysqli_fetch_assoc($myresult)){
        echo $rows["p_id"] . " - " . $rows["e_id"] . "<br>";
    }
}


?>
