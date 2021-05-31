<?php
    $con = mysqli_connect('localhost','root','','pizzadb');
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $cek_data = mysqli_query($con,"SELECT * FROM userdata WHERE username = '$username'");
    $cek = mysqli_num_rows($cek_data);

    if($cek > 0){
        echo "username already exist";
    }else{
        $input = mysqli_query($con,"INSERT INTO userdata (id,username,email,password)VALUES('$id','$username','$email','$password')");
        if($input){
            echo 'SignUp Successfull';
        }
    }

?>