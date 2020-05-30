<?php

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(empty($username) || empty($password)){
        header("Location: index.php?field=empty");
        exit();
    }
    else{
        // username harus terdiri dari kombinasi huruf atau angka / keduanya
        if(!preg_match("/^[a-zA-Z0-9]+$/", $username)){
            header("Location: index.php?username=invalid");
            exit();
        }
        else{
            header("Location: home.php?username=" . $username);
            exit();
        }
    }
}