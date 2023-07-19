<?php
// Register a Patient
include "connect.php";

function addDoc($data) {
    global $db; // Add this line to access the $db variable from connect.php

    $nD = $data['nD'];
    $prD = $data['prD'];
    $spc = $data['spc'];
    $city = $data['city'];
    $tel = $data['tel'];
    $mailD = $data['mailD'];
    $pwd1 = $data['pwd1'];
    $pwd2 = $data['pwd2'];
    $desc = $data['descr'];
    $timeIn = $data['timeIn'];
    $timeOut = $data['timeOut'];
    $photo = $data['photoD'];

    if (isset($nD) && isset($prD) && isset($mailD) && isset($spc) && isset($city) && isset($tel) && isset($pwd1) && isset($pwd2)&& isset($pwd2)&& isset($desc)&& isset($timeIn)&& isset($timeOut)&& isset($photo)) {
        $verif = $db->query("SELECT * FROM Doctor WHERE nomD='$nD' AND prD='$prD'");
        if ($verif->fetch()) {
            echo "<script>alert('doctor already exists');</script>";
        } else {
            $query = "INSERT INTO Doctor VALUES ('', '$nD', '$prD', '$spc', '$city','$tel','$mailD','$pwd1','$desc','$timeIn','$timeOut','$photo')";
            $r = $db->exec($query);
            if ($r) {
                header("Location: login.php");
            } else {
                echo "<script>alert('Failed to add a Doctor');</script>";
            }
        }
    } else {
        echo "Fill all form fields";
    }
}
?>
