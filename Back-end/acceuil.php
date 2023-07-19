<?php
include "connect.php";
include "loginD.php";

function userDocterData(){
    global $db;
 



    // Create the SQL query to fetch all user data
    $sql = "SELECT * FROM doctor";

    // Prepare the statement
    $stmt = $db->prepare($sql);

    // Execute the statement
    $stmt->execute();

    // Fetch all rows as an associative array
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Check if any data was fetched
    if (count($users) > 0) {
        // Loop through the rows and fetch the data
        foreach ($users as $user) {
            // Access individual fields for each user
           return $user ;}

           
    
    } else {
        // No users found in the database
        echo "No users found.";
        return false;
    }


// Close the database connection
$conn = null;
}
?>