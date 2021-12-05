<?php
include "config.php";
?>

<form action = "governs_select.php" method = "GET">
    <b>Room Id:</b>
    <select name = "rid">

        <?php

        $sql_comment = "SELECT DISTINCT room_id FROM governs";
        $myresult = mysqli_query($db,$sql_comment);
        echo "<option value = >" . "any" ."</option>";
        while($id_rows = mysqli_fetch_assoc($myresult)){
            $rid = $id_rows["room_id"];
            echo "<option value = $rid>" . $rid ."</option>";
        }

        ?>

    </select>
    <br>
    <b>Type:</b>
    <select name = "type">

        <?php

        $sql_comment = "SELECT DISTINCT type FROM governs";
        $myresult = mysqli_query($db,$sql_comment);
        echo "<option value = >" . "any" ."</option>";
        while($id_rows = mysqli_fetch_assoc($myresult)){
            $type = $id_rows["type"];
            echo "<option value = $type>". $type . "</option>";
        }

        ?>

    </select>
    <br>
    <b>Employee Id:</b>
    <select name = "eid">

        <?php

        $sql_comment = "SELECT DISTINCT e_id FROM governs";
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