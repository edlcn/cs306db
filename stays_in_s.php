<?php
include "config.php";
?>

<form action = "stays_in_select.php" method = "GET">
    <b>Patient Id:</b>
    <select name = "pid">

        <?php

        $sql_comment = "SELECT DISTINCT p_id FROM stays_in";
        $myresult = mysqli_query($db,$sql_comment);
        echo "<option value = >" . "any" ."</option>";
        while($id_rows = mysqli_fetch_assoc($myresult)){
            $pid = $id_rows["p_id"];
            echo "<option value = $pid>" . $pid ."</option>";
        }

        ?>

    </select>
    <br>
    <b>Room Id:</b>
    <select name = "rid">

        <?php

        $sql_comment = "SELECT DISTINCT room_id FROM stays_in";
        $myresult = mysqli_query($db,$sql_comment);
        echo "<option value = >" . "any" ."</option>";
        while($id_rows = mysqli_fetch_assoc($myresult)){
            $rid = $id_rows["room_id"];
            echo "<option value = $rid>" . $rid ."</option>";
        }

        ?>

    </select>
    <br>
    <b>Date of Discharge:</b>
    <select name = "dod">

        <?php

        $sql_comment = "SELECT DISTINCT date_discharge FROM stays_in";
        $myresult = mysqli_query($db,$sql_comment);
        echo "<option value = >" . "any" ."</option>";
        while($id_rows = mysqli_fetch_assoc($myresult)){
            $dod = $id_rows["date_discharge"];
            echo "<option value = $dod>". $dod . "</option>";
        }

        ?>

    </select>
    <br>
    <button>SELECT</button>
</form>