<?php

// Create account page php codes

function emptyInputSignup($name, $username, $pwd){
    $result;
    if (empty($name) || empty($username) || empty($pwd)) {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidUsername($username){
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function unameExists($conn, $username){
    $sql = "SELECT * FROM users WHERE usersUname = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../createlog.php?error=stmtFailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}
// function passExists($conn, $pwd){
//     $sql = "SELECT * FROM users WHERE usersPass = ?;";
//     $stmt = mysqli_stmt_init($conn);
//     if(!mysqli_stmt_prepare($stmt, $sql)){
//         header("location: ../createlog.php?error=stmtFailed");
//         exit();
//     }

//     mysqli_stmt_bind_param($stmt, "s", $pwd);
//     mysqli_stmt_execute($stmt);

//     $resultData = mysqli_stmt_get_result($stmt);

//     if ($row = mysqli_fetch_assoc($resultData)){
//         return $row;
//     }
//     else{
//         $result = false;
//         return $result;
//     }
//     mysqli_stmt_close($stmt);
// }

function createUser($conn, $name, $username, $pwd){
    $sql = "INSERT INTO users (usersName, usersUname, usersPass) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../createlog.php?error=stmtFailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sss", $name, $username, $pwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../logindex.php?successful");
        exit();
}

// Create account page php codes

// Login page php codes

function emptyLoginInput($username, $pwd){
    $result;
    if (empty($username) || empty($pwd)) {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function loginUser($conn, $username, $pwd){
    // $unameCheck = unameExists($conn, $username);

    // if ($unameCheck === false) {
    //     header("location: ../logindex.php?error=invalidUnameInput");
    //     exit();
    // }

    // $pwdCompare = $unameCheck["usersPass"];
    // $pwdCheck = password_verify($pwd, $pwdCompare);

    // if ($pwdCheck === false) {
    //     header("location: ../logindex.php?error=invalidPassInput");
    //     exit();
    // }

    // else if ($pwdCheck === true){
        session_start();
        $_SESSION["userid"] = $unameCheck["usersId"];
        $_SESSION["username"] = $unameCheck["usersUname"];
        header("location: ../index.php");
        exit();
    // }
}

// Login page php codes