<?php
include "config.php";

if (!empty($_POST["e_id"])){
    $eid = $_POST["e_id"];
    $pid = $_POST["p_id"];
    $sqls = "INSERT INTO attends(p_id,e_id) values ($pid,$eid)";
    $result = mysqli_query($db,$sqls);
    echo "Added.";
}
else {
    echo "Not added.";
}





?>