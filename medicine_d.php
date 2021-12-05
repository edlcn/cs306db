<?php
include "config.php";

if (!empty($_GET["ids"])){
    $code = $_GET["ids"];



    $sql_st = "DELETE FROM medicine WHERE code = $code";
    $result = mysqli_query($db,$sql_st);
    echo "Deleted.";
}
else {
    echo "Not deleted.";
}





?>
