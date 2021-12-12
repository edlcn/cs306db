<?php
include "config.php";
?>
<div align = "center">
    <br>
    <br>
    <br>
    <br>

    <b><p style="color:blue">Delete Patient</p></b>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width="device-width", initial-scale=1.0">
    <title>Delete Patient</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body style = "background-color:grey;">



<div class="container">
    <div class ="row">
        <div class = "col">
            <div class="d-flex justify-content-center align-items-center">
                <div class = "card mt-2" style="width: 180px; background-color:darkgrey;">
                    <div class = "card-body" >
                        <form action = "patient_d.php" method = "GET" >
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
                            <div class="row">



                                <button type = "submit" class ="btn btn-primary" > Delete </button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>






