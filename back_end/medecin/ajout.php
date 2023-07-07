<?php
require_once '../../connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nom = isset($_POST['nom']) ? $_POST['nom'] : '';
    $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';
    $specialite = isset($_POST['specialite']) ? $_POST['specialite'] : '';
    $city = isset($_POST['city']) ? $_POST['city'] : '';
    $country = isset($_POST['country']) ? $_POST['country'] : '';
    $mobile_phone = isset($_POST['mobile_phone']) ? $_POST['mobile_phone'] : '';
    $office_phone = isset($_POST['office_phone']) ? $_POST['office_phone'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';


    $sql = "INSERT INTO medecin (nom, prenom, specialite, city, country, mobile_phone, office_phone, email) VALUES ('$nom', '$prenom', '$specialite', '$city', '$country', '$mobile_phone', '$office_phone', '$email')";


    $result = mysqli_query($connection, $sql);


    if ($result) {
        header("Location: lister.php");
        exit;
    } else {
        echo "Error: " . mysqli_error($connection);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Insert User</title>
</head>
<body>
    <h1>Insert User</h1>
    <form action="/project/back_end/medecin/ajout.php" method="POST">
        
        <label for="nom">Nom:</label>
        <input type="text" name="nom" id="nom" required><br><br>
        
        <label for="prenom">Prénom:</label>
        <input type="text" name="prenom" id="prenom" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>
        
        <label for="specialite">Spécialité:</label>
        <input type="text" name="specialite" id="specialite" required><br><br>
        
        <label for="city">City:</label>
        <input type="text" name="city" id="city" required><br><br>
        
        <label for="country">Country:</label>
        <input type="text" name="country" id="country" required><br><br>
        
        <label for="mobile_phone">Mobile Phone:</label>
        <input type="text" name="mobile_phone" id="mobile_phone" required><br><br>
        
        <label for="office_phone">Office Phone:</label>
        <input type="text" name="office_phone" id="office_phone" required><br><br>
        
        <input type="submit" value="Insert">
    </form>
</
