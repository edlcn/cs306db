<?php
include "config.php";

if (!empty($_POST["room_id"])){
    $eid = $_POST["e_id"];
    $roomid = $_POST["room_id"];
    $type = $_POST["type"];
    $sqls = "INSERT INTO governs(room_id,type,e_id) values ($roomid,$type,$eid)";
    $result = mysqli_query($db,$sqls);
    echo "Added.";
}
else {
    echo "Not added.";
}





?>