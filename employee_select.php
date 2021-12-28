<?php
include "config.php";

if (!empty($_GET["eid"])){
    $eid = $_GET["eid"];
    
    $sql_comment = "SELECT * FROM employee WHERE e_id = '".$eid."' ";

    if (!empty($_GET["name"])) {
        $pro = $_GET["name"];
        $name = str_replace('+', ' ', $pro);
        $sql_comment .= " AND name = '".$name."' ";
    }

    if (!empty($_GET["age"])) {
        $age = $_GET["age"];
        $sql_comment .= " AND age = '".$age."' ";
    }

    if (!empty($_GET["salary"])) {
        $salary = $_GET["salary"];
        $sql_comment .= " AND salary = '".$salary."' ";
    }

    $myresult = mysqli_query($db,$sql_comment);

    while($rows = mysqli_fetch_assoc($myresult)){
        echo $rows["e_id"] . " - " . $rows["name"] . " - " . $rows["age"] . " - " . $rows["salary"] . "<br>";
    }
}
else {
    $sql_comment = "SELECT * FROM employee ";
    $hasWhere = false;

    if (!empty($_GET["name"])) {
        $pro = $_GET["name"];
        $name = str_replace('+', ' ', $pro);
        $sql_comment .= " WHERE name = '".$name."' ";
        $hasWhere = true;
    }

    if (!empty($_GET["age"])) {
        $age = $_GET["age"];
        if($hasWhere) {
            $sql_comment .= " AND age = '".$age."' ";
        }
        else {
            $sql_comment .= " WHERE age = '".$age."' ";
            $hasWhere = true;
        }
    }

    if (!empty($_GET["salary"])) {
        $salary = $_GET["salary"];
        if($hasWhere) {
            $sql_comment .= " AND salary = '".$salary."' ";
        }
        else {
            $sql_comment .= " WHERE salary = '".$salary."' ";
            $hasWhere = true;
        }
    }

    $myresult = mysqli_query($db,$sql_comment);

    while($rows = mysqli_fetch_assoc($myresult)){
        echo $rows["e_id"] . " - " . $rows["name"] . " - " . $rows["age"] . " - " . $rows["salary"] . "<br>";
    }
}


?>