<?php
include "config.php";

if (!empty($_GET["rid"])){
    $rid = $_GET["rid"];
    
    $sql_comment = "SELECT * FROM governs WHERE room_id = '".$rid."' ";

    if(!empty($_GET["type"])) {
        $type = $_GET["type"];
        $sql_comment .= " AND type = '".$type."' ";
    }

    if(!empty($_GET["eid"])) {
        $eid = $_GET["eid"];
        $sql_comment .= " AND e_id = '".$eid."' ";
    }

    $myresult = mysqli_query($db,$sql_comment);

    while($rows = mysqli_fetch_assoc($myresult)){
        echo $rows["room_id"] . " - " . $rows["type"] . " - " . $rows["e_id"] . "<br>";
    }
}
else {
    $sql_comment = "SELECT * FROM governs ";
    $hasWhere = false;

    if(!empty($_GET["type"])) {
        $type = $_GET["type"];
        $sql_comment .= " WHERE type = '".$type."' ";
        $hasWhere = true;
    }

    if(!empty($_GET["eid"])) {
        $eid = $_GET["eid"];
        if($hasWhere) {
            $sql_comment .= " AND e_id = '".$eid."' ";
        }
        else {
            $sql_comment .= " WHERE e_id = '".$eid."' ";
            $hasWhere = true;
        }
    }

    $myresult = mysqli_query($db,$sql_comment);

    while($rows = mysqli_fetch_assoc($myresult)){
        echo $rows["room_id"] . " - " . $rows["type"] . " - " . $rows["e_id"] . "<br>";
    }
}


?>
