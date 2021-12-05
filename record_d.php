<?php
include "config.php";

if (!empty($_GET["ids"])){
    $rid = $_GET["ids"];



    $sql_st = "DELETE FROM record WHERE rec_id = $rid";
    $result = mysqli_query($db,$sql_st);
    echo "Deleted.";
}
else {
    echo "Not deleted.";
}





?>
