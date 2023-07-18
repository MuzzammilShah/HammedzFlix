<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "webproject";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if(!$conn){
    die("Connection isn't successfull: " . mysqli_connect_error());
}