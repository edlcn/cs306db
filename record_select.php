<?php
include "config.php";

if (!empty($_GET["rid"])){
    $rid = $_GET["rid"];
    
    $sql_comment = "SELECT * FROM record WHERE rec_id = '".$rid."' ";

    if (!empty($_GET["pid"])){
        $pid = $_GET["pid"];
        $sql_comment .= " AND p_id = '".$pid."' ";
    }

    if (!empty($_GET["date"])){
        $date = $_GET["date"];
        $sql_comment .= " AND date = '".$date."' ";
    }

    $myresult = mysqli_query($db,$sql_comment);

    while($rows = mysqli_fetch_assoc($myresult)){
        echo $rows["rec_id"] . " - " . $rows["p_id"] . " - " . $rows["date"] . "<br>";
    }
}
else {
    $sql_comment = "SELECT * FROM record";
    $hasWhere = false;

    if (!empty($_GET["pid"])){
        $pid = $_GET["pid"];
        $sql_comment .= " WHERE p_id = '".$pid."' ";
        $hasWhere = true;
    }

    if (!empty($_GET["date"])){
        $date = $_GET["date"];
        if($hasWhere) {
            $sql_comment .= " AND date = '".$date."' ";
        }
        else {
            $sql_comment .= " WHERE date = '".$date."' ";
        }
    }

    $myresult = mysqli_query($db,$sql_comment);

    while($rows = mysqli_fetch_assoc($myresult)){
        echo $rows["rec_id"] . " - " . $rows["p_id"] . " - " . $rows["date"] . "<br>";
    }
}


?>
