<?php
include "config.php";
?>

<form action = "attends_select.php" method = "GET">
    <b>Patient Id:</b>
    <select name = "pid">

        <?php

        $sql_comment = "SELECT DISTINCT p_id FROM attends";
        $myresult = mysqli_query($db,$sql_comment);
        echo "<option value = >" . "any" ."</option>";
        while($id_rows = mysqli_fetch_assoc($myresult)){
            $pid = $id_rows["p_id"];
            echo "<option value = $pid>" . $pid ."</option>";
        }

        ?>

    </select>
    <br>
    <b>Employee Id:</b>
    <select name = "eid">

        <?php

        $sql_comment = "SELECT DISTINCT e_id FROM attends";
        $myresult = mysqli_query($db,$sql_comment);
        echo "<option value = >" . "any" ."</option>";
        while($id_rows = mysqli_fetch_assoc($myresult)){
            $eid = $id_rows["e_id"];
            echo "<option value = $eid>". $eid . "</option>";
        }

        ?>

    </select>
    <br>
    <button>SELECT</button>
</form>