<?php
include "config.php";

if (!empty($_POST["e_id"])){
    $recid = $_POST["rec_id"];
    $eid = $_POST["e_id"];
    $sqls = "INSERT INTO stores(rec_id,e_id) values ($recid,$eid)";
    $result = mysqli_query($db,$sqls);
    echo "Added.";
}
else {
    echo "Not added.";
}





?>