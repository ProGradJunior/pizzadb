<?php
    $dbc = mysqli_connect("localhost", "root", "", "pizzadb");
    if(!$dbc) {
        die("DATABASE CONNECTION FAILED:" .mysqli_error($dbc));
        exit();
    }
    $dbs = mysqli_select_db($dbc, "pizzadb");
    if(!$dbs) {
        die("DATABASE SELECTION FAILED:" .mysqli_error($dbc));
        exit();
    }
    
    $id = $_POST['id'];
    $type = $_POST['type'];
    $toppings = $_POST['toppings'];
    $size = $_POST['size'];
    $number = $_POST['number'];
    
    $query = "INSERT INTO orderdetails (id, type, toppings, size, number) VALUES ('$id', '$type', '$toppings', '$size', '$number')";
        if(mysqli_query($dbc, $query)){
            echo "Records added successfully!";
        } else{
            echo "ERROR: Could not able to execute $query. " . mysqli_error($dbc);
        }

    mysqli_close($dbc);


?>