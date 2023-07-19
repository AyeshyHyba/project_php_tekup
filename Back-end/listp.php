<?php
include "connect.php";

function listD(){
    global $db;
    return $db->query("select * from patient");
}
?>
