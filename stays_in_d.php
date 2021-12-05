<?php
include "config.php";

if (!empty($_GET["ids"])){
    $pid = $_GET["ids"];

    $sql_comment = "DELETE FROM stays_in WHERE p_id = '".$pid."' ";

    if (!empty($_GET["rids"])){
        $rid = $_GET["rids"];
        $sql_comment .= " AND room_id = '".$rid."' ";

        $myresult = mysqli_query($db,$sql_comment);

        echo "The relationship between Patient $pid AND Room $rid is deleted.";
    }
    else {
        $myresult = mysqli_query($db,$sql_comment);

        echo "All stay relations of Patient with ID no: $pid is deleted.";
    }

}
else {
    $sql_comment = "DELETE FROM stays_in";

    if (!empty($_GET["rids"])){
        $rid = $_GET["rids"];
        $sql_comment .= " WHERE room_id = '".$rid."' ";

        $myresult = mysqli_query($db,$sql_comment);

        echo "All relationships of room with No: $rid is deleted.";
    }
    else {
        $myresult = mysqli_query($db,$sql_comment);

        echo "all stay relations are deleted.";
    }

}

?>
