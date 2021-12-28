<?php
include "config.php";
?>

<form action = "employee_select.php" method = "GET">
    <b>Employee Id:</b>
    <select name = "eid">

        <?php

        $sql_comment = "SELECT DISTINCT e_id FROM employee ORDER BY e_id";
        $myresult = mysqli_query($db,$sql_comment);
        echo "<option value = >" . "any" ."</option>";
        while($id_rows = mysqli_fetch_assoc($myresult)){
            $eid = $id_rows["e_id"];
            echo "<option value = $eid>". $eid . "</option>";
        }

        ?>

    </select>
    <br>
    <b>Name:</b>
    <select name = "name">

        <?php

        $sql_comment = "SELECT DISTINCT name FROM employee ORDER BY name";
        $myresult = mysqli_query($db,$sql_comment);
        echo "<option value = >" . "any" ."</option>";
        while($id_rows = mysqli_fetch_assoc($myresult)){
            $name = $id_rows["name"];
            echo "<option value = '".$name."'>". $name . "</option>";
        }

        ?>

    </select>
    <br>
    <b>Age:</b>
    <select name = "age">

        <?php

        $sql_comment = "SELECT DISTINCT age FROM employee ORDER BY age";
        $myresult = mysqli_query($db,$sql_comment);
        echo "<option value = >" . "any" ."</option>";
        while($id_rows = mysqli_fetch_assoc($myresult)){
            $age = $id_rows["age"];
            echo "<option value = $age>". $age . "</option>";
        }

        ?>

    </select>
    <br>
    <b>Salary:</b>
    <select name = "salary">

        <?php

        $sql_comment = "SELECT DISTINCT salary FROM employee ORDER BY salary";
        $myresult = mysqli_query($db,$sql_comment);
        echo "<option value = >" . "any" ."</option>";
        while($id_rows = mysqli_fetch_assoc($myresult)){
            $salary = $id_rows["salary"];
            echo "<option value = $salary>". $salary . "</option>";
        }

        ?>

    </select>
    <br> 
    <button>SELECT</button>
</form>