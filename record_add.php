<?php
include "config.php";

if (!empty($_POST["rec_id"])){
    $recid = $_POST["rec_id"];
    $pid = $_POST["p_id"];
    $date = $_POST["date"];
    $sqls = "INSERT INTO record(p_id,e_id) values ($recid,$pid,'$date')";
    $result = mysqli_query($db,$sqls);
    echo "Added.";
}
else {
    echo "Not added.";
}





?>