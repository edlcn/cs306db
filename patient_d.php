<?php
include "config.php";

if (!empty($_GET["ids"])){
    $pid = $_GET["ids"];



    $sql_st = "DELETE FROM patient WHERE p_id = $pid";
    $result = mysqli_query($db,$sql_st);
    echo "Deleted.";
}
else {
    echo "Not deleted.";
}





?>
