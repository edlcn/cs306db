<?php
include "config.php";
?>

<form action = "room_select.php" method = "GET">
    <b>Room Id:</b>
    <select name = "ids">

        <?php

        $sql_comment = "SELECT DISTINCT room_id FROM room";
        $myresult = mysqli_query($db,$sql_comment);
        echo "<option value = $rid>" . "any" ."</option>";
        while($id_rows = mysqli_fetch_assoc($myresult)){
            $rid = $id_rows["room_id"];
            echo "<option value = $rid>" . $rid ."</option>";
        }

        ?>

    </select>
    <br>
    <b>Room Type:</b>
    <select name = "types">

        <?php

        $sql_comment = "SELECT DISTINCT type FROM room";
        $myresult = mysqli_query($db,$sql_comment);
        echo "<option value = $type>" . "any" ."</option>";
        while($id_rows = mysqli_fetch_assoc($myresult)){
            $type = $id_rows["type"];
            echo "<option value = $type>". $type . "</option>";
        }

        ?>

    </select>
    <br>
    <button>SELECT</button>
</form>