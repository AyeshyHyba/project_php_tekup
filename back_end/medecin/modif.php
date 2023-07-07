<!DOCTYPE html>
<html>
<head>
    <title>Update User</title>
</head>
<body>
    <h1>Update User</h1>

    <?php
    require_once '../../connect.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Retrieve the values from the input fields
        $id_med = $_POST['id_med'];
        $nom = mysqli_real_escape_string($connection, $_POST['nom']);
        $prenom = mysqli_real_escape_string($connection, $_POST['prenom']);
        $specialite = mysqli_real_escape_string($connection, $_POST['specialite']);
        $city = mysqli_real_escape_string($connection, $_POST['city']);
        $country = mysqli_real_escape_string($connection, $_POST['country']);
        $mobile_phone = mysqli_real_escape_string($connection, $_POST['mobile_phone']);
        $office_phone = mysqli_real_escape_string($connection, $_POST['office_phone']);
        $email = mysqli_real_escape_string($connection, $_POST['email']);

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
            $mobile_phone= $row['mobile_phone'];
            $office_phone = $row['office_phone'];
            $email = $row['email'];
        }
    }
    // Display the form with the pre-filled values
    ?>

    <form action="" method="POST" >
        <input type="hidden" name="id_med" value="<?php echo $id_med; ?>">

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?php echo $email; ?>" required><br>

        <label for="nom">Nom:</label>
        <input type="text" name="nom" id="nom" value="<?php echo $nom; ?>" required><br>

        <label for="prenom">Prenom:</label>
        <input type="text" name="prenom" id="prenom" value="<?php echo $prenom; ?>" required><br>

        <label for="specialite">Specialite:</label>
        <input type="text" name="specialite" id="specialite" value="<?php echo $specialite; ?>" required><br>

        <label for="city">City:</label>
        <input type="text" name="city" id="city" value="<?php echo $city; ?>" required><br>

        <label for="country">Country:</label>
        <input type="text" name="country" id="country" value="<?php echo $country; ?>" required><br>

        <label for="mobile_phone">Mobile Phone:</label>
        <input type="text" name="mobile_phone" id="mobile_phone" value="<?php echo $mobile_phone; ?>" required><br>

        <label for="office_phone">Office Phone:</label>
        <input type="text" name="office_phone" id="office_phone" value="<?php echo $office_phone; ?>" required><br>

        <input type="submit" value="Update">
    </form>
</body>
</html>
