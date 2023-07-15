<?php
include "connect.php";

function connectionD($data){
    global $db;
    $mail = $data['mail'];
    $pwd = $data['pwd'];
    if (isset($mail) && isset($pwd)) {
        $res = $db->query("SELECT * FROM Doctor WHERE mailD='$mail' AND pwdD='$pwd'");
        if ($res->fetch()) {
            // Authentication successful
            header("Location:  ../Front-end/list.php"); // Redirect to the dashboard page or any other authorized page
            exit;
        } else {
            header("location: ../Front-end/error.php");
            // Authentication failed, show error message or redirect to login page
            echo 'Invalid username or password';
        }
    }else{
        echo "<script>alert('Failed to login');</script>";
    }
}
