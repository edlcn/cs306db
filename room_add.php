<?php
include "config.php";

if (!empty($_POST["room_id"])){
    $roomid = $_POST["room_id"];
    $type = $_POST["type"];
    $sqls = "INSERT INTO room(room_id,type) values ($roomid,'$type')";
    $result = mysqli_query($db,$sqls);
    echo "Added.";
}
else {
    echo "Not added.";
}





?>