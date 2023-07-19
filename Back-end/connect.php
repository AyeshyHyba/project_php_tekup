<?php
// Create a new  connection
$user = "root";
$pwd = "";
$db = new PDO('mysql:host=localhost;dbname=finddoctor', $user, $pwd);

// Check if the connection was successful

    if(!$db){
        die("error de connexion");
    }
?>