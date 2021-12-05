<?php
include "config.php";
?>

<form action = "clerk_select.php" method = "GET">
    <b>Employee Id:</b>
    <select name = "eid">

        <?php

        $sql_comment = "SELECT DISTINCT e_id FROM clerk";
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