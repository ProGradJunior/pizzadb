<?php
    $con = mysqli_connect('localhost','root','','pizzadb');
    $username = $_POST['username'];
    $password = $_POST['password'];

    $cek_data = mysqli_query($con,"SELECT * FROM userdata WHERE username = '$username' and password = '$password'");

    $cek = mysqli_num_rows($cek_data);

    if($cek > 0){
        print "Logged In Successfully";
    }else{
        print "Logged In Failed";
    }
?>