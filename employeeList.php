<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CS306DB</title>
        <link rel = "stylesheet" href = "style.css">
        <style>
            .doctorList ul {
                margin: 0;
                padding: 0;
                list-style-type: none;
            }
            .doctorList ul li {
                float: left;
                width: 22.6666666667%;
                max-width: 255px;
                margin-right: 3.1111111111%;
                margin-bottom: 20px;
            }
        </style>

    </head>
    <body>
        <div class="container">
            <div class="navbar">
                <div class = "logo">
                    <a href="#"><img src="su.jpg"></a>
                </div>
                <ul>
                    <li><a href = "index.php">Main Page</a></li>
                    <li><a href = "about.php">About</a></li>
                    <li><a href = "adminPage.php">Database Management</a></li>
                    <li><a href = "#">Login</a>
                        <div class="sub-menu-1">
                            <ul>
                                <li><a href="adminPage.php">Login as Admin </a></li>
                                <li><a href="employee_id.php">Login as Employee </a></li>
                                <li><a href="patientPage.php">Login as Patient </a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href = "employeeList.php">Çalışan Kadrosu</a></li>
                </ul>
            </div>
            <div class = "doctorList" style="width: 75%; height: 90%; font-size: 20px; margin:0 auto;">
                <?php
                    include "config.php";

                    $sql_comment = "SELECT * FROM employee;";
                    $myresult = mysqli_query($db,$sql_comment);
                    echo "<ul>";
                    while($rows = mysqli_fetch_assoc($myresult)){
                        $doctor = "SELECT * FROM doctor WHERE e_id = '".$rows["e_id"]."'; ";
                        $isDoctor = mysqli_query($db,$doctor);
                        $isDocRes = mysqli_fetch_assoc($isDoctor);
                        
                        
                        if($isDocRes["e_id"] != NULL) {
                            echo "<li><b>Dr. " . $rows["name"] . "<br>" . $isDocRes["profession"] . "</b><br>Age: " . $rows["age"] . "<br><br></li>";
                        }
                        else {
                            $nurse = "SELECT * FROM nurse WHERE e_id = '".$rows["e_id"]."'; ";
                            $isNurse = mysqli_query($db,$nurse);
                            $isNurRes = mysqli_fetch_assoc($isNurse);
                            if($isNurRes["e_id"] != NULL) {
                                echo "<li><b>Nurse<br>" . $rows["name"] . "</b><br>Age: " . $rows["age"] . "<br><br></li>";
                            }
                            else {
                                $clerk = "SELECT * FROM clerk WHERE e_id = '".$rows["e_id"]."'; ";
                                $isClerk = mysqli_query($db,$clerk);
                                $isCleRes = mysqli_fetch_assoc($isClerk);
                                if($isCleRes["e_id"] != NULL) {
                                    echo "<li><b>Clerk<br>" . $rows["name"] . "</b><br>Age: " . $rows["age"] . "<br><br></li>";
                                }
                                else {
                                    echo "<li><b>Employee<br>" . $rows["name"] . "</b><br>Age: " . $rows["age"] . "<br><br></li>";
                                }
                            }
                        }
                    }
                    echo "</ul>";
                ?>
            </div>
        </div>
    </body>
</html>