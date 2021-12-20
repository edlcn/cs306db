<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width="device-width", initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    </head>
    <body style = "background-color:grey;">
        <div class="center">
            <div class="container">
                <?php
                    include "config.php";

                    if (!empty($_POST["e_id"])){
                        $eid = $_POST["e_id"];
                        $info = "SELECT * FROM employee WHERE e_id = '".$eid."'; ";
                        $result = mysqli_query($db,$info);
                        $data = mysqli_fetch_assoc($result);
                        if($data["e_id"] == NULL) {
                            echo "invalid id!";
                        }
                        else {
                            echo "<b>Your name: " . $data["name"] . "<br>Your age: " . $data["age"] . "<br>Your salary: " . $data["salary"] . "</b>";

                            $doctor = "SELECT * FROM doctor WHERE e_id = '".$eid."'; ";
                            $mydoctor = mysqli_query($db,$doctor);
                            
                            if(mysqli_fetch_assoc($mydoctor)["e_id"] != NULL) {
                                $ps = "SELECT * FROM attends A, patient P WHERE A.e_id = '".$eid."' AND A.p_id = P.p_id; ";
                                $patients = mysqli_query($db,$ps);
                                echo "<br><br><b>Patients that you are responsible:</b><br>";
                                while($rows = mysqli_fetch_assoc($patients)){
                                    echo $rows["p_id"] . " - " . $rows["name"] . " - " . $rows["age"] . " - " . $rows["height"] . " - " . $rows["weight"] . "<br>";
                                }
                            }
                            else {
                                $nurse = "SELECT * FROM nurse WHERE e_id = '".$eid."'; ";
                                $mynurse = mysqli_query($db,$nurse);
                                
                                if(mysqli_fetch_assoc($mynurse)["e_id"] != NULL) {
                                    $rooms = "SELECT * FROM governs G, room R WHERE G.e_id = '".$eid."' AND G.room_id = R.room_id; ";
                                    $myrooms = mysqli_query($db,$rooms);
                                    echo "<br><br><b>Rooms that you are responsible:</b><br>";
                                    while($rows = mysqli_fetch_assoc($myrooms)){
                                        echo $rows["room_id"] . " - " . $rows["type"] . "<br>";
                                    }
                                }
                                else {
                                    $clerk = "SELECT * FROM clerk WHERE e_id = '".$eid."'; ";
                                    $myclerk = mysqli_query($db,$clerk);
                                    
                                    if(mysqli_fetch_assoc($myclerk)["e_id"] != NULL) {
                                        $recs = "SELECT * FROM stores S, record R WHERE S.e_id = '".$eid."' AND S.rec_id = R.rec_id; ";
                                        $myrecs = mysqli_query($db,$recs);
                                        echo "<br><br><b>Records that you are responsible:</b><br>";
                                        while($rows = mysqli_fetch_assoc($myrecs)){
                                            echo $rows["rec_id"] . " - " . $rows["p_id"] . " - " . $rows["date"] . "<br>";
                                        }
                                    }
                                }
                            }
                        }
                    }
                    else {
                        echo "id cannot be empty!";
                    }
                ?>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    </body>
</html>