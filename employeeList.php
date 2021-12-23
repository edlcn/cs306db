<?php
    include "config.php";

    $sql_comment = "SELECT * FROM employee;";
    $myresult = mysqli_query($db,$sql_comment);
    while($rows = mysqli_fetch_assoc($myresult)){
        $doctor = "SELECT * FROM doctor WHERE e_id = '".$rows["e_id"]."'; ";
        $isDoctor = mysqli_query($db,$doctor);
        $isDocRes = mysqli_fetch_assoc($isDoctor);
        if($isDocRes["e_id"] != NULL) {
            echo "<b>Dr. " . $rows["name"] . "<br>" . $isDocRes["profession"] . "</b><br>Age: " . $rows["age"] . "<br><br>";
        }
        else {
            $nurse = "SELECT * FROM nurse WHERE e_id = '".$rows["e_id"]."'; ";
            $isNurse = mysqli_query($db,$nurse);
            $isNurRes = mysqli_fetch_assoc($isNurse);
            if($isNurRes["e_id"] != NULL) {
                echo "<b>Nurse<br>" . $rows["name"] . "</b><br>Age: " . $rows["age"] . "<br><br>";
            }
            else {
                $clerk = "SELECT * FROM clerk WHERE e_id = '".$rows["e_id"]."'; ";
                $isClerk = mysqli_query($db,$clerk);
                $isCleRes = mysqli_fetch_assoc($isClerk);
                if($isCleRes["e_id"] != NULL) {
                    echo "<b>Clerk<br>" . $rows["name"] . "</b><br>Age: " . $rows["age"] . "<br><br>";
                }
                else {
                    echo "<b>Employee<br>" . $rows["name"] . "</b><br>Age: " . $rows["age"] . "<br><br>";
                }
            }
        }
    }
?>