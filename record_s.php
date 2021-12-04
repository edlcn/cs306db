<?php
include "config.php";
?>

<form action = "record_select.php" method = "GET">
    <b>Record Id:</b>
    <select name = "rid">

        <?php

        $sql_comment = "SELECT DISTINCT rec_id FROM record";
        $myresult = mysqli_query($db,$sql_comment);
        echo "<option value = $rid>" . "any" ."</option>";
        while($id_rows = mysqli_fetch_assoc($myresult)){
            $rid = $id_rows["rec_id"];
            echo "<option value = >" . $rid ."</option>";
        }

        ?>

    </select>
    <br>
    <b>Patient Id:</b>
    <select name = "pid">

        <?php

        $sql_comment = "SELECT DISTINCT p_id FROM record";
        $myresult = mysqli_query($db,$sql_comment);
        echo "<option value = >" . "any" ."</option>";
        while($id_rows = mysqli_fetch_assoc($myresult)){
            $pid = $id_rows["p_id"];
            echo "<option value = $pid>". $pid . "</option>";
        }

        ?>

    </select>
    <br>
    <b>Date:</b>
    <select name = "date">

        <?php

        $sql_comment = "SELECT DISTINCT date FROM record";
        $myresult = mysqli_query($db,$sql_comment);
        echo "<option value = >" . "any" ."</option>";
        while($id_rows = mysqli_fetch_assoc($myresult)){
            $date = $id_rows["date"];
            echo "<option value = $date>". $date . "</option>";
        }

        ?>

    </select>
    <br>
    <button>SELECT</button>
</form>