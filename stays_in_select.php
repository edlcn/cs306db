<?php
include "config.php";

if (!empty($_GET["pid"])){
    $pid = $_GET["pid"];
    
    $sql_comment = "SELECT * FROM stays_in WHERE p_id = '".$pid."' ";

    if(!empty($_GET["rid"])) {
        $rid = $_GET["rid"];
        $sql_comment .= " AND room_id = '".$rid."' ";
    }

    if(!empty($_GET["dod"])) {
        $dod = $_GET["dod"];
        $sql_comment .= " AND date_discharge = '".$dod."' ";
    }

    $myresult = mysqli_query($db,$sql_comment);

    while($rows = mysqli_fetch_assoc($myresult)){
        echo $rows["p_id"] . " - " . $rows["room_id"] . " - " . $rows["date_discharge"] . "<br>";
    }
}
else {
    $sql_comment = "SELECT * FROM stays_in ";
    $hasWhere = false;

    if(!empty($_GET["rid"])) {
        $rid = $_GET["rid"];
        $sql_comment .= " WHERE room_id = '".$rid."' ";
        $hasWhere = true;
    }

    if(!empty($_GET["dod"])) {
        $dod = $_GET["dod"];
        if($hasWhere) {
            $sql_comment .= " AND date_discharge = '".$dod."' ";
        }
        else {
            $sql_comment .= " WHERE date_discharge = '".$dod."' ";
            $hasWhere = true;
        }
    }

    $myresult = mysqli_query($db,$sql_comment);

    while($rows = mysqli_fetch_assoc($myresult)){
        echo $rows["p_id"] . " - " . $rows["room_id"] . " - " . $rows["date_discharge"] . "<br>";
    }
}


?>
