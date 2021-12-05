<?php
include "config.php";
?>

<form action = "attends_d.php" method = "GET">
    <b>Doctor ID:</b>
    <select name = "ids">

        <?php

        $sql_comment = "SELECT DISTINCT e_id FROM attends";
        $myresult = mysqli_query($db,$sql_comment);
        echo "<option value = $eid>" . "-" ."</option>";
        while($id_rows = mysqli_fetch_assoc($myresult)){
            $eid = $id_rows["e_id"];
            echo "<option value = $eid>" . $eid ."</option>";
        }

        ?>

    </select>
    <br>
    <b>Patient ID:</b>
    <select name = "pids">

        <?php

        $sql_comment = "SELECT DISTINCT p_id FROM attends";
        $myresult = mysqli_query($db,$sql_comment);
        echo "<option value = $pid>" . "-" ."</option>";
        while($id_rows = mysqli_fetch_assoc($myresult)){
            $pid = $id_rows["p_id"];
            echo "<option value = $pid>". $pid . "</option>";
        }

        ?>

    </select>
    <br>
    <button>DELETE</button>
</form>

