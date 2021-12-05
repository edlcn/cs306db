<?php
include "config.php";

if (!empty($_GET["ids"])){
    $eid = $_GET["ids"];

    $sql_comment = "DELETE FROM governs WHERE e_id = '".$eid."' ";

    if (!empty($_GET["pids"])){
        $pid = $_GET["pids"];
        $sql_comment .= " AND room_id = '".$pid."' ";

        $myresult = mysqli_query($db,$sql_comment);

        echo "The relationship between Nurse $eid AND Room $pid is deleted.";
    }
    else {
        $myresult = mysqli_query($db,$sql_comment);

        echo "All attend relations of Nurse withID no: $eid is deleted.";
    }

}
else {
    $sql_comment = "DELETE FROM governs";

    if (!empty($_GET["pids"])){
        $pid = $_GET["pids"];
        $sql_comment .= " WHERE room_id = '".$pid."' ";

        $myresult = mysqli_query($db,$sql_comment);

        echo "All relationships of room with No: $pid is deleted.";
    }
    else {
        $myresult = mysqli_query($db,$sql_comment);

        echo "all govern relations are deleted.";
    }

}

?>