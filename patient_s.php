<?php
include "config.php";
?>
<body style = "background-color:grey;">
<div align = "center">
    <br>
    <br>
    <b><p style="color:blue">Delete Patient</p></b>
    <br>
    <br>
    <form action = "patient_select.php" method = "GET">
        <b>Patient Id:</b>
        <select name = "pid">

            <?php

            $sql_comment = "SELECT DISTINCT p_id FROM patient ORDER BY p_id ";
            $myresult = mysqli_query($db,$sql_comment);
            echo "<option value = >" . "any" ."</option>";
            while($id_rows = mysqli_fetch_assoc($myresult)){
                $pid = $id_rows["p_id"];
                echo "<option value = $pid>" . $pid ."</option>";
            }

            ?>

        </select>
        <br>
        <b>Name:</b>
        <select name = "name">

            <?php

            $sql_comment = "SELECT DISTINCT name FROM patient ORDER BY name ";
            $myresult = mysqli_query($db,$sql_comment);
            echo "<option value = >" . "any" ."</option>";
            while($id_rows = mysqli_fetch_assoc($myresult)){
                $name = $id_rows["name"];
                echo "<option value = $name>". $name . "</option>";
            }

            ?>

        </select>
        <br>
        <b>Age:</b>
        <select name = "age">

            <?php

            $sql_comment = "SELECT DISTINCT age FROM patient ORDER BY age ";
            $myresult = mysqli_query($db,$sql_comment);
            echo "<option value = >" . "any" ."</option>";
            while($id_rows = mysqli_fetch_assoc($myresult)){
                $age = $id_rows["age"];
                echo "<option value = $age>". $age . "</option>";
            }

            ?>

        </select>
        <br><b>Height:</b>
        <select name = "height">

            <?php

            $sql_comment = "SELECT DISTINCT height FROM patient ORDER BY height ";
            $myresult = mysqli_query($db,$sql_comment);
            echo "<option value = >" . "any" ."</option>";
            while($id_rows = mysqli_fetch_assoc($myresult)){
                $height = $id_rows["height"];
                echo "<option value = $height>". $height . "</option>";
            }

            ?>

        </select>
        <br><b>Weight:</b>
        <select name = "weight">

            <?php

            $sql_comment = "SELECT DISTINCT weight FROM patient ORDER BY weight ";
            $myresult = mysqli_query($db,$sql_comment);
            echo "<option value = >" . "any" ."</option>";
            while($id_rows = mysqli_fetch_assoc($myresult)){
                $weight = $id_rows["weight"];
                echo "<option value = $weight>". $weight . "</option>";
            }

            ?>

        </select>
        <br>
        <button>SELECT</button>
    </form>



</div>



</body>

