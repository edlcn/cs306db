<?php
include "config.php";

if (!empty($_GET["pid"])){
    $pid = $_GET["pid"];
    
    $sql_comment = "SELECT * FROM patient WHERE p_id = '".$pid."' ";

    if (!empty($_GET["name"])) {
        $pro = $_GET["name"];
        $name = str_replace('+', ' ', $pro);
        $sql_comment .= " AND name = '".$name."' ";
    }

    if (!empty($_GET["age"])){
        $age = $_GET["age"];
        $sql_comment .= " AND age = '".$age."' ";
    }

    if (!empty($_GET["height"])){
        $height = $_GET["height"];
        $sql_comment .= " AND height = '".$height."' ";
    }
    
    if (!empty($_GET["weight"])){
        $weight = $_GET["weight"];
        $sql_comment .= " AND weight = '".$weight."' ";
    }

    $myresult = mysqli_query($db,$sql_comment);

    while($rows = mysqli_fetch_assoc($myresult)){
        echo $rows["p_id"] . " - " . $rows["name"] . " - " . $rows["age"] . " - " . $rows["height"] . " - " . $rows["weight"] . "<br>";
    }
}
else {
    $sql_comment = "SELECT * FROM patient";
    $hasWhere = false;

    if (!empty($_GET["name"])) {
        $pro = $_GET["name"];
        $name = str_replace('+', ' ', $pro);
        $sql_comment .= " WHERE name = '".$name."' ";
        $hasWhere = true;
    }

    if (!empty($_GET["age"])){
        $age = $_GET["age"];
        if($hasWhere) {
            $sql_comment .= " AND age = '".$age."' ";
        }
        else {
            $sql_comment .= " WHERE age = '".$age."' ";
        }
    }

    if (!empty($_GET["height"])){
        $height = $_GET["height"];
        if($hasWhere) {
            $sql_comment .= " AND height = '".$height."' ";
        }
        else {
            $sql_comment .= " WHERE height = '".$height."' ";
        }
    }
    
    if (!empty($_GET["weight"])){
        $weight = $_GET["weight"];
        if($hasWhere) {
            $sql_comment .= " AND weight = '".$weight."' ";
        }
        else {
            $sql_comment .= " WHERE weight = '".$weight."' ";
        }
    }

    $myresult = mysqli_query($db,$sql_comment);

    while($rows = mysqli_fetch_assoc($myresult)){
        echo $rows["p_id"] . " - " . $rows["name"] . " - " . $rows["age"] . " - " . $rows["height"] . " - " . $rows["weight"] . "<br>";
    }
}


?>
