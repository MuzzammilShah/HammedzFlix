<?php

if (isset($_POST["submit"])){

    $name = $_POST["name"];
    $username = $_POST["uname"];
    $pwd = $_POST["password"];
    
    require_once 'dbcode.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($name, $username, $pwd) !== false){
        header("location: ../createlog.php?error=emptyinput");
        exit();
    }
    if (invalidUsername($username) !== false){
        header("location: ../createlog.php?error=invalidUsername");
        exit();
    }
    // if (invalidPassword($pwd) !== false){
    //     header("location: ../createlog.php?error=invalidPassword");
    //     exit();
    // }
    if (unameExists($conn, $username) !== false){
        header("location: ../createlog.php?error=unameExists");
        exit();
    }
    // if (passExists($conn, $pwd) !== false){
    //     header("location: ../createlog.php?error=passExists");
    //     exit();
    // }

    createUser($conn, $name, $username, $pwd);

}
else{
    header("location: ../createlog.php");
    exit();
}