<?php
include "config.php";
?>

<form action = "employee_d.php" method = "GET">
    <select name = "ids">

        <?php

        $sql_comment = "SELECT e_id, name FROM employee";
        $myresult = mysqli_query($db,$sql_comment);

        while($id_rows = mysqli_fetch_assoc($myresult)){
            $eid = $id_rows["e_id"];
            $name = $id_rows["name"];
            echo "<option value = $eid>" . $eid . " - " . $name . "</option>";
        }

        ?>

    </select>
    <button>DELETE</button>
</form>
