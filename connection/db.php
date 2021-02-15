<?php 

$servername = "localhost";
$username = "sidney";
$password = "32913013";
$database = "system";


$con = new mysqli($servername, $username, $password, $database);

if($con->connect_error){
    die("Connection failed: ".$con->connect_error);
}
