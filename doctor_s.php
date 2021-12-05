<?php
include "config.php";
?>

<form action = "doctor_select.php" method = "GET">
    <b>Employee Id:</b>
    <select name = "eid">

        <?php

        $sql_comment = "SELECT DISTINCT e_id FROM doctor";
        $myresult = mysqli_query($db,$sql_comment);
        echo "<option value = >" . "any" ."</option>";
        while($id_rows = mysqli_fetch_assoc($myresult)){
            $eid = $id_rows["e_id"];
            echo "<option value = $eid>". $eid . "</option>";
        }

        ?>

    </select>
    <br>
    <b>Profession:</b>
    <select name = "pro">

        <?php

        $sql_comment = "SELECT DISTINCT profession FROM doctor";
        $myresult = mysqli_query($db,$sql_comment);
        echo "<option value = >" . "any" ."</option>";
        while($id_rows = mysqli_fetch_assoc($myresult)){
            $pro = $id_rows["profession"];
            echo "<option value = $pro>". $pro . "</option>";
        }

        ?>

    </select>
    <br>
    <button>SELECT</button>
</form>