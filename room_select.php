<?php
include "config.php";

if (!empty($_GET["ids"])){
    $rid = $_GET["ids"];
    
    $sql_comment = "SELECT * FROM room WHERE room_id = '".$rid."' ";

    if (!empty($_GET["types"])){
        $type = $_GET["types"];
        $sql_comment .= " AND type = '".$type."' ";
    }

    $myresult = mysqli_query($db,$sql_comment);

    while($rows = mysqli_fetch_assoc($myresult)){
        echo $rows["room_id"] . " - " . $rows["type"] . "<br>";
    }
}
else {
    $sql_comment = "SELECT * FROM room";

    if (!empty($_GET["types"])){
        $type = $_GET["types"];
        $sql_comment .= " WHERE type = '".$type."' ";
    }

    $myresult = mysqli_query($db,$sql_comment);

    while($rows = mysqli_fetch_assoc($myresult)){
        echo $rows["room_id"] . " - " . $rows["type"] . "<br>";
    }
}


?>
