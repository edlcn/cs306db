<?php
include "config.php";

if (!empty($_POST["code"])){
    $code = $_POST["code"];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $number = $_POST["number"];
    $sqls = "INSERT INTO medicine(code,name,price,number) values ($code,'$name',$price,$number)";
    $result = mysqli_query($db,$sqls);
    echo "Added.";
}
else {
    echo "Not added.";
}





?>