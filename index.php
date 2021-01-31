<?php 

$servername = "localhost";
$username = "sidney";
$password = "32913013";
$database = "system";


$con = new mysqli($servername, $username, $password, $database);

if($con->connect_error){
    die("Connection failed: ".$con->connect_error);
}

echo "Connected successfully. ";

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System</title>
</head>
<body>
    
</body>
</html>