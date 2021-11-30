<?php
include "config.php";
?>

<form action = "room_d.php" method = "GET">
    <select name = "ids">

        <?php

        $sql_comment = "SELECT room_id, type FROM room";
        $myresult = mysqli_query($db,$sql_comment);

        while($id_rows = mysqli_fetch_assoc($myresult)){
            $rid = $id_rows["room_id"];
            $type = $id_rows["type"];
            echo "<option value = $rid>" . $rid . " - " . $type . "</option>";
        }

        ?>

    </select>
    <button>DELETE</button>
</form>
