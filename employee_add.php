<?php
include "config.php";

if (!empty($_POST["e_id"])){
    $eid = $_POST["e_id"];
    $name = $_POST["name"];
    $age = $_POST["age"];
    $salary = $_POST["salary"];
    $sqlss = "INSERT INTO employee(e_id,name,age,salary) values ($eid,'$name',$age,$salary)";
    $result = mysqli_query($db,$sqlss);
    echo $sqlss;
}
else {
    echo "Not added.";
}





?>