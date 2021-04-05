<?php
session_start();
if(!isset($_SESSION["user"])){
    echo "Necessário login para ver a página";
    exit;
}
?>