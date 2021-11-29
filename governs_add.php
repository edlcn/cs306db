<?php
include "config.php";

if (!empty($_POST["room_id"])){
    $eid = $_POST["e_id"];
    $roomid = $_POST["room_id"];

    $sqls = "INSERT INTO governs(room_id,e_id) values ($roomid,$eid)";
    $result = mysqli_query($db,$sqls);
    echo "Added.";
}
else {
    echo "Not added.";
}





?>