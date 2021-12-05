<?php
include "config.php";
?>

<form action = "stores_select.php" method = "GET">
    <b>Record Id:</b>
    <select name = "rid">

        <?php

        $sql_comment = "SELECT DISTINCT rec_id FROM stores";
        $myresult = mysqli_query($db,$sql_comment);
        echo "<option value = >" . "any" ."</option>";
        while($id_rows = mysqli_fetch_assoc($myresult)){
            $rid = $id_rows["rec_id"];
            echo "<option value = $rid>". $rid . "</option>";
        }

        ?>

    </select>
    <br>
    <b>Employee Id:</b>
    <select name = "eid">

        <?php

        $sql_comment = "SELECT DISTINCT e_id FROM stores";
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