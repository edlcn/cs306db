<?php
include "config.php";
?>



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
<div class="container">
        <div class ="row">
            <div class = "col">
                <div class="d-flex justify-content-center align-items-center">
                <div class = "card mt-5" style="width: 800px; background-color:darkgrey;">
                    <div class = "card-body">
                    <form action = "employee_add.php" method = "post" >
                        <div class="row">
                        <div class="col">
                        <input type="text" class="form-control" placeholder="Employee Id" name = "e_id">
                        </div>
                        <div class="col">
                        <input type="text" class="form-control" placeholder="Name" name = "name">
                        </div>
                        <div class="col">
                        <input type="text" class="form-control" placeholder="Age" name = "age">
                        </div>
                        <div class="col">
                        <input type="text" class="form-control" placeholder="Salary" name = "salary">
                        </div>
                        <button type = "submit" class ="btn btn-primary" > Add </button>
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