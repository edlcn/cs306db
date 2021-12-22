

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

                    if (!empty($_POST["p_id"])){
                        $pid = $_POST["p_id"];
                        $info = "SELECT * FROM patient WHERE p_id = '".$pid."'; ";
                        $result = mysqli_query($db,$info);
                        $data = mysqli_fetch_assoc($result);
                        if($data["p_id"] == NULL) {
                            echo "invalid id!";
                        }
                        else {
                            echo "<b>Your name: " . $data["name"] . "<br>Your age: " . $data["age"] . "<br>Your height: " . $data["height"] . "<br>Your weight: " . $data["weight"] . "<br>";
                            
                            echo "<br><b>List of Doctors attending for you:</b>";
                            $doc = "SELECT * FROM attends A, doctor D INNER JOIN employee ON D.e_id = employee.e_id WHERE A.p_id = '".$pid."' AND A.e_id = D.e_id; ";
                            $docRes = mysqli_query($db,$doc);
                            $counter = 1;
                            while($rows = mysqli_fetch_assoc($docRes)) {
                                echo "<br>Doctor #" . $counter . ":<br>";
                                echo "Doctor Name: " . $rows["name"] . "<br> Doctor Profession: " . $rows["profession"] . "<br>";
                                $counter += 1;
                            }

                            echo "<br><b>List of Medicines you have:</b>";
                            $med = "SELECT * FROM buys B, medicine M WHERE B.p_id = '".$pid."' AND B.code = M.code; ";
                            $medRes = mysqli_query($db,$med);
                            $counter = 1;
                            while($rows = mysqli_fetch_assoc($medRes)) {
                                echo "<br>Medicine #" . $counter . ":<br>";
                                echo "Medicine Code: " . $rows["code"] . "<br> Medicine Name: " . $rows["name"] . "<br> Price: " . $rows["price"] . "<br> Amount: " . $rows["number"] . "<br>";
                                $counter += 1;
                            }

                            echo "<br><b>List of Rooms you have been:</b>";
                            $med = "SELECT * FROM stays_in S, room R WHERE S.p_id = '".$pid."' AND S.room_id = R.room_id; ";
                            $medRes = mysqli_query($db,$med);
                            $counter = 1;
                            while($rows = mysqli_fetch_assoc($medRes)) {
                                echo "<br>Room #" . $counter . ":<br>";
                                echo "Room Id: " . $rows["room_id"] . "<br> Room Type: " . $rows["type"] . "<br> Date of discharge: " . $rows["date_discharge"] . "<br>";
                                $counter += 1;
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