<?php
// Register a Patient
include "connect.php";

function addPatient($data) {
    global $db; // Add this line to access the $db variable from connect.php

    $nom = $data['nom'];
    $pr = $data['pr'];
    $mail = $data['mail'];
    $pwd1 = $data['pwd1'];
    $pwd2 = $data['pwd2'];

    if (isset($nom) && isset($pr) && isset($mail) && isset($pwd1) && isset($pwd2)) {
        $verif = $db->query("SELECT * FROM Patient WHERE nomP='$nom' AND prP='$pr'");
        if ($verif->fetch()) {
            echo "<script>alert('Patient already exists');</script>";
        } else {
            $query = "INSERT INTO Patient VALUES ('', '$nom', '$pr', '$mail', '$pwd1')";
            $r = $db->exec($query);
            if ($r) {
                header("Location: login.html");
            } else {
                echo "<script>alert('Failed to add patient');</script>";
            }
        }
    } else {
        echo "Fill all form fields";
    }
}
?>
