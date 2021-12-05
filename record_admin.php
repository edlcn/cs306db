<?php
include "config.php";
?>

<form action = "record_d.php" method = "GET">
    <select name = "ids">

        <?php

        $sql_comment = "SELECT rec_id, p_id,date FROM record";
        $myresult = mysqli_query($db,$sql_comment);

        while($id_rows = mysqli_fetch_assoc($myresult)){
            $rid = $id_rows["rec_id"];
            $name = $id_rows["p_id"];
            $date = $id_rows["date"];
            echo "<option value = $rid>" . $rid . " - " . $name . " - " . $date . "</option>";
        }

        ?>

    </select>
    <button>DELETE</button>
</form>

