<?php
include "config.php";
?>

<form action = "patient_d.php" method = "GET">
<select name = "ids">

<?php

$sql_comment = "SELECT p_id, name FROM patient";
$myresult = mysqli_query($db,$sql_comment);

    while($id_rows = mysqli_fetch_assoc($myresult)){
        $pid = $id_rows["p_id"];
        $name = $id_rows["name"];
        echo "<option value = $pid>" . $pid . " - " . $name . "</option>";
    }

?>

</select>
<button>DELETE</button>
</form>
