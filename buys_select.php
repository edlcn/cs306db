<?php
include "config.php";

if (!empty($_GET["pid"])){
    $pid = $_GET["pid"];
    
    $sql_comment = "SELECT * FROM buys WHERE p_id = '".$pid."' ";

    if (!empty($_GET["code"])){
        $code = $_GET["code"];
        $sql_comment .= " AND code = '".$code."' ";
    }

    $myresult = mysqli_query($db,$sql_comment);

    while($rows = mysqli_fetch_assoc($myresult)){
        echo $rows["code"] . " - " . $rows["p_id"] . "<br>";
    }
}
else {
    $sql_comment = "SELECT * FROM buys";

    if (!empty($_GET["code"])){
        $code = $_GET["code"];
        $sql_comment .= " WHERE code = '".$code."' ";
    }

    $myresult = mysqli_query($db,$sql_comment);

    while($rows = mysqli_fetch_assoc($myresult)){
        echo $rows["code"] . " - " . $rows["p_id"] . "<br>";
    }
}


?>
