<?php
include "config.php";

if (!empty($_POST["p_id"])){
    $name = $_POST["name"];
    $pid = $_POST["p_id"];
    $age = $_POST["age"];
    $height = $_POST["height"];
    $weight = $_POST["weight"];

    $sqls = "INSERT INTO patient(p_id,name,age,height,weight) values ($pid,'$name',$age,'$height','$weight')";
    $result = mysqli_query($db,$sqls);
    echo "Added.";
}
else {
    echo "Not added.";
}





?>