<?php
include "config.php";

if (!empty($_GET["ids"])){
    $code = $_GET["ids"];

    $sql_comment = "DELETE FROM buys WHERE code = '".$code."' ";

    if (!empty($_GET["pids"])){
        $pid = $_GET["pids"];
        $sql_comment .= " AND p_id = '".$pid."' ";

        $myresult = mysqli_query($db,$sql_comment);

        echo "The relationship between Medicine $code AND Patient $pid is deleted.";
    }
    else {
        $myresult = mysqli_query($db,$sql_comment);

        echo "All buy relations of Medicine with code: $code is deleted.";
    }

}
else {
    $sql_comment = "DELETE FROM buys";

    if (!empty($_GET["pids"])){
        $pid = $_GET["pids"];
        $sql_comment .= " WHERE p_id = '".$pid."' ";

        $myresult = mysqli_query($db,$sql_comment);

        echo "All relationships of patient with ID: $pid is deleted.";
    }
    else {
        $myresult = mysqli_query($db,$sql_comment);

        echo "all buy relations are deleted.";
    }

}

?>
