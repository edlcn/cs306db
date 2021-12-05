<?php
include "config.php";

if (!empty($_GET["code"])){
    $code = $_GET["code"];
    
    $sql_comment = "SELECT * FROM medicine WHERE code = '".$code."' ";

    if (!empty($_GET["name"])){
        $name = $_GET["name"];
        $sql_comment .= " AND name = '".$name."' ";
    }

    if (!empty($_GET["price"])){
        $price = $_GET["price"];
        $sql_comment .= " AND price = '".$price."' ";
    }

    if (!empty($_GET["num"])){
        $num = $_GET["num"];
        $sql_comment .= " AND number = '".$num."' ";
    }

    $myresult = mysqli_query($db,$sql_comment);

    while($rows = mysqli_fetch_assoc($myresult)){
        echo $rows["code"] . " - " . $rows["name"] . " - " . $rows["price"] . " - " . $rows["number"] . "<br>";
    }
}
else {
    $sql_comment = "SELECT * FROM medicine";
    $hasWhere = false;

    if (!empty($_GET["name"])){
        $name = $_GET["name"];
        $sql_comment .= " WHERE name = '".$name."' ";
        $hasWhere = true;
    }

    if (!empty($_GET["price"])){
        $price = $_GET["price"];
        if($hasWhere) {
            $sql_comment .= " AND price = '".$price."' ";
        }
        else {
            $sql_comment .= " WHERE price = '".$price."' ";
        }
    }

    if (!empty($_GET["num"])){
        $num = $_GET["num"];
        if($hasWhere) {
            $sql_comment .= " AND number = '".$num."' ";
        }
        else {
            $sql_comment .= " WHERE number = '".$num."' ";
        }
    }

    $myresult = mysqli_query($db,$sql_comment);

    while($rows = mysqli_fetch_assoc($myresult)){
        echo $rows["code"] . " - " . $rows["name"] . " - " . $rows["price"] . " - " . $rows["number"] . "<br>";
    }
}


?>
