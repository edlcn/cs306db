<?php
include "config.php";

if (!empty($_GET["rid"])){
    $rid = $_GET["rid"];
    
    $sql_comment = "SELECT * FROM stores WHERE rec_id = '".$rid."' ";

    if (!empty($_GET["eid"])){
        $eid = $_GET["eid"];
        $sql_comment .= " AND e_id = '".$eid."' ";
    }

    $myresult = mysqli_query($db,$sql_comment);

    while($rows = mysqli_fetch_assoc($myresult)){
        echo $rows["e_id"] . " - " . $rows["rec_id"] . "<br>";
    }
}
else {
    $sql_comment = "SELECT * FROM stores";

    if (!empty($_GET["eid"])){
        $eid = $_GET["eid"];
        $sql_comment .= " WHERE e_id = '".$eid."' ";
    }

    $myresult = mysqli_query($db,$sql_comment);

    while($rows = mysqli_fetch_assoc($myresult)){
        echo $rows["e_id"] . " - " . $rows["rec_id"] . "<br>";
    }
}


?>
