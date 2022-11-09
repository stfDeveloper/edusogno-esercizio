<?php
$host = "localhost:8889";
$username = "root";
$password = "root";
$db = "edusogno";

$connection = new mysqli ($host, $username, $password, $db);

if($connection === false){
    die("Could not connect ");
}
?>


