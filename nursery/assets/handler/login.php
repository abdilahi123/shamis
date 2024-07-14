<?php

if(isset($_POST["submit"])) {
    $user = $_POST["user"];
    $password = $_POST["pass"];

    $myPass = 123;

    $pass = password_hash($myPass, PASSWORD_BCRYPT);

    $username = "abdillah";

    if(password_verify($password, $pass)) {
        if ($user == $username) {
        session_start();
        $_SESSION["user"] = $user;
        header("Location: ../../pages/dashboard.php");
        exit();
    }

    }else { 
        echo "Error password incorrect";
        header("Location: ../index.php");
    }

} else {
    echo "Error ";
    header("Location: ../index.php");
    exit();
}

