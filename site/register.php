<?php
// Connexion à la base de données
$servername = "localhost";
$username = "wiem";
$password = "wiem";
$dbname = "login";

// Création de la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Vérification de la méthode de requête
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    
    // Vérification si les mots de passe correspondent
    if ($password === $confirm_password) {
        // Préparation de la requête SQL pour insérer les données dans la base de données
        $sql = "INSERT INTO login (username, password) VALUES ('$username', '$password')";

        // Exécution de la requête
        if ($conn->query($sql) === TRUE) {
            echo "Successful Registration";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Error: Passwords do not match";
    }
} else {
    echo "Error: Invalid request method";
}

// Fermeture de la connexion à la base de données
$conn->close();
?>