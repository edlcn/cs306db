<?php
include "config.php";
?>

<form action = "medicine_select.php" method = "GET">
    <b>Code:</b>
    <select name = "code">

        <?php

        $sql_comment = "SELECT DISTINCT code FROM medicine ORDER BY code ";
        $myresult = mysqli_query($db,$sql_comment);
        echo "<option value = >" . "any" ."</option>";
        while($id_rows = mysqli_fetch_assoc($myresult)){
            $code = $id_rows["code"];
            echo "<option value = $code>" . $code ."</option>";
        }

        ?>

    </select>
    <br>
    <b>Name:</b>
    <select name = "name">

        <?php

        $sql_comment = "SELECT DISTINCT name FROM medicine ORDER BY name ";
        $myresult = mysqli_query($db,$sql_comment);
        echo "<option value = >" . "any" ."</option>";
        while($id_rows = mysqli_fetch_assoc($myresult)){
            $name = $id_rows["name"];
            echo "<option value = $name>". $name . "</option>";
        }

        ?>

    </select>
    <br>
    <b>Price:</b>
    <select name = "price">

        <?php

        $sql_comment = "SELECT DISTINCT price FROM medicine ORDER BY price ";
        $myresult = mysqli_query($db,$sql_comment);
        echo "<option value = >" . "any" ."</option>";
        while($id_rows = mysqli_fetch_assoc($myresult)){
            $price = $id_rows["price"];
            echo "<option value = $price>". $price . "</option>";
        }

        ?>

    </select>
    <br><b>Number:</b>
    <select name = "num">

        <?php

        $sql_comment = "SELECT DISTINCT number FROM medicine ORDER BY number ";
        $myresult = mysqli_query($db,$sql_comment);
        echo "<option value = >" . "any" ."</option>";
        while($id_rows = mysqli_fetch_assoc($myresult)){
            $num = $id_rows["number"];
            echo "<option value = $num>". $num . "</option>";
        }

        ?>

    </select>
    <br>
    <button>SELECT</button>
</form>