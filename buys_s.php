<?php
include "config.php";
?>

<form action = "buys_select.php" method = "GET">
    <b>Code:</b>
    <select name = "code">

        <?php

        $sql_comment = "SELECT DISTINCT code FROM buys";
        $myresult = mysqli_query($db,$sql_comment);
        echo "<option value = >" . "any" ."</option>";
        while($id_rows = mysqli_fetch_assoc($myresult)){
            $code = $id_rows["code"];
            echo "<option value = $code>". $code . "</option>";
        }

        ?>

    </select>
    <br>
    <b>Patient Id:</b>
    <select name = "pid">

        <?php

        $sql_comment = "SELECT DISTINCT p_id FROM buys";
        $myresult = mysqli_query($db,$sql_comment);
        echo "<option value = >" . "any" ."</option>";
        while($id_rows = mysqli_fetch_assoc($myresult)){
            $pid = $id_rows["p_id"];
            echo "<option value = $pid>" . $pid ."</option>";
        }

        ?>

    </select>
    <br>
    <button>SELECT</button>
</form>