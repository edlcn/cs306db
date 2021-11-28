<?php
include "config.php";

if (!empty($_POST["e_id"])){
    $eid = $_POST["e_id"];
    $sqls = "INSERT INTO nurse(e_id) values ($eid)";
    $result = mysqli_query($db,$sqls);
    echo "Added.";
}
else {
    echo "Not added.";
}





?>