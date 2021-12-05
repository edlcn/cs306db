<?php
include "config.php";
?>

<form action = "buys_d.php" method = "GET">
    <b>Medicine Code:</b>
    <select name = "ids">

        <?php

        $sql_comment = "SELECT DISTINCT code FROM buys";
        $myresult = mysqli_query($db,$sql_comment);
        echo "<option value = $code>" . "-" ."</option>";
        while($id_rows = mysqli_fetch_assoc($myresult)){
            $code = $id_rows["code"];
            echo "<option value = $code>" . $code ."</option>";
        }

        ?>

    </select>
    <br>
    <b>Patient ID:</b>
    <select name = "pids">

        <?php

        $sql_comment = "SELECT DISTINCT p_id FROM buys";
        $myresult = mysqli_query($db,$sql_comment);
        echo "<option value = $pid>" . "-" ."</option>";
        while($id_rows = mysqli_fetch_assoc($myresult)){
            $pid = $id_rows["p_id"];
            echo "<option value = $pid>". $pid . "</option>";
        }

        ?>

    </select>
    <br>
    <button>DELETE</button>
</form>


