<?php
include "config.php";
?>

<form action = "governs_d.php" method = "GET">
    <b>Nurse ID:</b>
    <select name = "ids">

        <?php

        $sql_comment = "SELECT DISTINCT e_id FROM governs";
        $myresult = mysqli_query($db,$sql_comment);
        echo "<option value = $eid>" . "-" ."</option>";
        while($id_rows = mysqli_fetch_assoc($myresult)){
            $eid = $id_rows["e_id"];
            echo "<option value = $eid>" . $eid ."</option>";
        }

        ?>

    </select>
    <br>
    <b>Room No:</b>
    <select name = "pids">

        <?php

        $sql_comment = "SELECT DISTINCT room_id FROM governs";
        $myresult = mysqli_query($db,$sql_comment);
        echo "<option value = $pid>" . "-" ."</option>";
        while($id_rows = mysqli_fetch_assoc($myresult)){
            $pid = $id_rows["room_id"];
            echo "<option value = $pid>". $pid . "</option>";
        }

        ?>

    </select>
    <br>
    <button>DELETE</button>
</form>

