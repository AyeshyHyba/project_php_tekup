<?php
// Register a Patient
include "connect.php";

function addPatient($data) {
    global $db; // Add this line to access the $db variable from connect.php

    $nom = $data['nom'];
    $pr = $data['pr'];
    $numT = $data['numT'];
    $mail = $data['mail'];
    $pwd1 = $data['pwd1'];
    $pwd2 = $data['pwd2'];
    $photo = $data['photo'];

    if (isset($nom) && isset($pr) && isset($mail) && isset($pwd1) && isset($pwd2)) {
        $verif = $db->query("SELECT * FROM Patient WHERE nomP='$nom' AND prp='$pr'");
        if ($verif->fetch()) {
            echo "<script>alert('Patient already exists');</script>";
        } else {
            $query = "INSERT INTO Patient VALUES ('', '$nom', '$pr','$numT', '$mail', '$pwd1',$photo)";
            $r = $db->exec($query);
            if ($r) {
                header("Location: login.php");
            } else {
                echo "<script>alert('Failed to add patient');</script>";
            }
        }
    } else {
        echo "Fill all form fields";
    }
}
?>
