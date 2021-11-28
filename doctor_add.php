<?php
include "config.php";

if (!empty($_POST["e_id"])){
    $eid = $_POST["e_id"];
    $profession = $_POST["profession"];
    $sqls = "INSERT INTO doctor(e_id,profession) values ($eid,'$profession')";
    $result = mysqli_query($db,$sqls);
    echo "Added.";
}
else {
    echo "Not added.";
}





?>