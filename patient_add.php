<?php
include "config.php";

if (!empty($_POST["p_id"])){
    $name = $_POST["name"];
    $pid = $_POST["p_id"];
    $age = $_POST["age"];
    $date_arrival = $_POST["date_arrival"];
    $date_discharge = $_POST["date_discharge"];
    $sqls = "INSERT INTO patient(p_id,name,age,date_arrival,date_discharge) values ($pid,'$name',$age,'$date_arrival','$date_discharge')";
    $result = mysqli_query($db,$sqls);
    echo "Added.";
}
else {
    echo "Not added.";
}





?>