<?php
include "config.php";

if (!empty($_GET["ids"])){
    $rid = $_GET["ids"];



    $sql_st = "DELETE FROM room WHERE room_id = $rid";
    $result = mysqli_query($db,$sql_st);
    echo "Room with ID no: $rid is deleted.";
}
else {
    echo "Not deleted.";
}





?>
