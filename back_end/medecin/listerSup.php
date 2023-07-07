<?php
// Assuming you have a database connection established
require_once '../../connect.php';

// Check if a delete request is submitted
if (isset($_POST['delete'])) {
    $id_med = $_POST['delete'];

    // Create SQL query to delete the medecin record
    $deleteSql = "DELETE FROM medecin WHERE id_med = '$id_med'";

    // Execute the delete query
    $deleteResult = mysqli_query($connection, $deleteSql);

    if ($deleteResult) {
        echo "Record deleted successfully.";
    } else {
        echo "Error: " . mysqli_error($connection);
    }
}

// Create SQL query to fetch medecin records
$sql = "SELECT * FROM medecin";

// Execute the query
$result = mysqli_query($connection, $sql);

// Check if any rows are returned
if (mysqli_num_rows($result) > 0) {
    echo "<h1>List of Medecins</h1>";
    echo "<table>";
    echo "<tr><th>ID</th><th>Nom</th><th>Prénom</th><th>Spécialité</th><th>Ville</th><th>Pays</th><th>Téléphone Mobile</th><th>Téléphone Bureau</th><th>Email</th><th>Action</th></tr>";

    // Loop through the rows of the result set
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id_med'] . "</td>";
        echo "<td>" . $row['nom'] . "</td>";
        echo "<td>" . $row['prenom'] . "</td>";
        echo "<td>" . $row['specialite'] . "</td>";
        echo "<td>" . $row['city'] . "</td>";
        echo "<td>" . $row['country'] . "</td>";
        echo "<td>" . $row['mobile_phone'] . "</td>";
        echo "<td>" . $row['office_phone'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>
                <form method='POST' onsubmit='return confirm(\"Are you sure you want to delete this record?\")'>
                    <input type='hidden' name='delete' value='" . $row['id_med'] . "'>
                    <button type='submit'>Delete</button>
                </form>
                <a href='modif.php?id_med=" . $row['id_med'] . "' class='button'>Modify</a>
            </td>";
        echo "</tr>";
    }

    echo "</table>";

} else {
    echo "No medecins found.";
}

// Close the database connection
mysqli_close($connection);
?>
<a href="../ajout.php" class="button">Add Medecin</a>
