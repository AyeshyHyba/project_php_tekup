<?php
include "connect.php";
function resetPwd($data){
    global $db;
    $pwd1 = $data['pwd1'];
    $mail = $data['mail'];
    echo "<script>alert('Failed ');</script>";
    $db->query("UPDATE patient SET pwd='$pwd1' WHERE mail='$mail'");
    header("Location: login.php");
}