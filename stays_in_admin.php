<?php
include "config.php";
?>

<form action = "stays_in_d.php" method = "GET">
    <b>Patient ID:</b>
    <select name = "ids">

        <?php

        $sql_comment = "SELECT DISTINCT p_id FROM stays_in";
        $myresult = mysqli_query($db,$sql_comment);
        echo "<option value = $pid>" . "-" ."</option>";
        while($id_rows = mysqli_fetch_assoc($myresult)){
            $pid = $id_rows["p_id"];
            echo "<option value = $pid>" . $pid ."</option>";
        }

        ?>

    </select>
    <br>
    <b>Room No:</b>
    <select name = "rids">

        <?php

        $sql_comment = "SELECT DISTINCT room_id FROM stays_in";
        $myresult = mysqli_query($db,$sql_comment);
        echo "<option value = $rid>" . "-" ."</option>";
        while($id_rows = mysqli_fetch_assoc($myresult)){
            $rid = $id_rows["room_id"];
            echo "<option value = $rid>". $rid . "</option>";
        }

        ?>

    </select>
    <br>

    <button>DELETE</button>
</form>


