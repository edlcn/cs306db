<?php
include "config.php";

if (!empty($_POST["code"])){
    $code = $_POST["code"];
    $pid = $_POST["p_id"];
    $sqls = "INSERT INTO buys(code,p_id) values ($code,$pid)";
    $result = mysqli_query($db,$sqls);
    echo "Added.";
}
else {
    echo "Not added.";
}
?>