<?php

if (isset($_POST["submit"])){

    $username = $_POST["uname"];
    $pwd = $_POST["password"];
    
    require_once 'dbcode.php';
    require_once 'functions.inc.php';
    
    if (emptyLoginInput($username, $pwd) !== false){
        header("location: ../logindex.php?error=emptyLoginInput");
        exit();
    }
    if (unameExists($conn, $username) !== false){
        header("location: ../logindex.php?error=invalidUnameInput");
        exit();
    }
    // if (passExists($conn, $pwd) !== false){
    //     header("location: ../logindex.php?error=invalidPassInput");
    //     exit();
    // }

    loginUser($conn, $username, $pwd);
}
else{
    header("location: ../logindex.php");
    exit();
}
?>