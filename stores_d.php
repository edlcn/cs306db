<?php
include "config.php";

if (!empty($_GET["ids"])){
    $eid = $_GET["ids"];

    $sql_comment = "DELETE FROM stores WHERE e_id = '".$eid."' ";

    if (!empty($_GET["pids"])){
        $pid = $_GET["pids"];
        $sql_comment .= " AND rec_id = '".$pid."' ";

        $myresult = mysqli_query($db,$sql_comment);

        echo "The relationship between Clerk $eid AND Record $pid is deleted.";
    }
    else {
        $myresult = mysqli_query($db,$sql_comment);

        echo "All store relations of Clerk with ID no: $eid is deleted.";
    }

}
else {
    $sql_comment = "DELETE FROM stores";

    if (!empty($_GET["pids"])){
        $pid = $_GET["pids"];
        $sql_comment .= " WHERE rec_id = '".$pid."' ";

        $myresult = mysqli_query($db,$sql_comment);

        echo "All relationships of record with ID: $pid is deleted.";
    }
    else {
        $myresult = mysqli_query($db,$sql_comment);

        echo "all store relations are deleted.";
    }

}

?>
