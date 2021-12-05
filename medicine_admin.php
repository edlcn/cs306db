<?php
include "config.php";
?>

<form action = "medicine_d.php" method = "GET">
    <select name = "ids">

        <?php

        $sql_comment = "SELECT code, name FROM medicine";
        $myresult = mysqli_query($db,$sql_comment);

        while($id_rows = mysqli_fetch_assoc($myresult)){
            $code = $id_rows["code"];
            $name = $id_rows["name"];
            echo "<option value = $code>" . $code . " - " . $name . "</option>";
        }

        ?>

    </select>
    <button>DELETE</button>
</form>

