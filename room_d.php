<?php
include "config.php";

if (!empty($_GET["ids"])){
    $rid = $_GET["ids"];
    
    $sql_comment = "DELETE FROM room WHERE room_id = '".$rid."' ";

    if (!empty($_GET["types"])){
        $type = $_GET["types"];
        $sql_comment .= " AND type = '".$type."' ";

        $myresult = mysqli_query($db,$sql_comment);

        echo "Rooms with ID no: $rid and type: $type is deleted.";
    }
    else {
        $myresult = mysqli_query($db,$sql_comment);

        echo "Rooms with ID no: $rid is deleted.";
    }
    
}
else {
    $sql_comment = "DELETE FROM room";

    if (!empty($_GET["types"])){
        $type = $_GET["types"];
        $sql_comment .= " WHERE type = '".$type."' ";

        $myresult = mysqli_query($db,$sql_comment);

        echo "Rooms with type: $type is deleted.";
    }
    else {
        $myresult = mysqli_query($db,$sql_comment);

        echo "all Rooms are deleted.";
    }

}

?>