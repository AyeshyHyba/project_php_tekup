<?php
// Assuming you have a database connection established
require_once '../../connect.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the values from the input fields
    $id_med = $_POST['id_med'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $specialite = $_POST['specialite'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $mobile_phone = $_POST['mobile_phone'];
    $office_phone = $_POST['office_phone'];
    $email = $_POST['email'];

    // Create SQL query to update the medecin record
    $updateSql = "UPDATE medecin SET
        nom = '$nom',
        prenom = '$prenom',
        specialite = '$specialite',
        city = '$city',
        country = '$country',
        mobile_phone = '$mobile_phone',
        office_phone = '$office_phone',
        email = '$email'
        WHERE id_med = '$id_med'";

    // Execute the update query
    $updateResult = mysqli_query($connection, $updateSql);

    if ($updateResult) {
        echo "Record updated successfully.";
    } else {
        echo "Error: " . mysqli_error($connection);
    }
}

// Retrieve the id_med value from the URL
if (isset($_GET['id_med'])) {
    $id_med = $_GET['id_med'];

    // Create SQL query to fetch the specific medecin record
    $sql = "SELECT * FROM medecin WHERE id_med = '$id_med'";

    // Execute the query
    $result = mysqli_query($connection, $sql);

    // Check if any rows are returned
    if (mysqli_num_rows($result) > 0) {
        // Fetch the record
        $row = mysqli_fetch_assoc($result);

        // Retrieve the specific attributes from the record
        $nom = $row['nom'];
        $prenom = $row['prenom'];
        $specialite = $row['specialite'];
        $city = $row['city'];
        $country = $row['country'];
        $mobile_phone = $row['mobile_phone'];
        $office_phone = $row['office_phone'];
        $email = $row['email'];

        // Display the form with the pre-filled values
        ?>
        <h1>Modify Medecin</h1>
        <form method="POST" action="">
            <input type="hidden" name="id_med" value="<?php echo $id_med; ?>">
            <label for="nom">Nom:</label>
            <input type="text" name="nom" id="nom" value="<?php echo $nom; ?>" required><br>

            <label for="prenom">Prenom:</label>
            <input type="text" name="prenom" id="prenom" value="<?php echo $prenom; ?>" required><br>

            <label for="specialite">Specialite:</label>
            <input type="text" name="specialite" id="specialite" value="<?php echo $specialite; ?>" required><br>

            <label for="city">City:</label>
            <input type="text" name="city" id="city" value="<?php echo $city; ?>" required><br>
