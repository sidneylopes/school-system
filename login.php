<?php

include "./connection/db.php";

session_start();
$user = $_POST['name'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username = '$user' AND password = '$password'";
$results = $con->query($sql);
$row = $results->fetch_assoc();

if($user == isset($row['username']) && $password == isset($row['password'])){
    $_SESSION["user"] = $user;
    echo true;
}
else{
    echo false;
}
