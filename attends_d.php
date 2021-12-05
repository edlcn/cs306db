<?php
include "config.php";

if (!empty($_GET["ids"])){
    $eid = $_GET["ids"];

    $sql_comment = "DELETE FROM attends WHERE e_id = '".$eid."' ";

    if (!empty($_GET["pids"])){
        $pid = $_GET["pids"];
        $sql_comment .= " AND p_id = '".$pid."' ";

        $myresult = mysqli_query($db,$sql_comment);

        echo "The relationship between Doctor $eid AND Patient $pid is deleted.";
    }
    else {
        $myresult = mysqli_query($db,$sql_comment);

        echo "All attend relations of Doctor withID no: $eid is deleted.";
    }

}
else {
    $sql_comment = "DELETE FROM attends";

    if (!empty($_GET["pids"])){
        $pid = $_GET["pids"];
        $sql_comment .= " WHERE p_id = '".$pid."' ";

        $myresult = mysqli_query($db,$sql_comment);

        echo "All relationships of patient with ID: $pid is deleted.";
    }
    else {
        $myresult = mysqli_query($db,$sql_comment);

        echo "all attend relations are deleted.";
    }

}

?>