<?php
include "config.php";

if (!empty($_GET["ids"])){
    $eid = $_GET["ids"];



    $sql_st = "DELETE FROM employee WHERE e_id = $eid";
    $result = mysqli_query($db,$sql_st);
    echo "Employee with ID no: $eid is deleted.";
}
else {
    echo "Not deleted.";
}





?>
