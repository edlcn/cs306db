<?php
include "config.php";

if (!empty($_POST["p_id"])){
    $roomid = $_POST["room_id"];
    $pid = $_POST["p_id"];
    $datedischarge = $_POST["date_discharge"];
    $sqls = "INSERT INTO stays_in(p_id,room_id,date_discharge) values ($pid,$roomid,'$datedischarge')";
    $result = mysqli_query($db,$sqls);
    echo "Added.";
}
else {
    echo "Not added.";
}





?>