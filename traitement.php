<?php
// Détails de connexion à la base de données MySQL
$host = "localhost";
$dbname = "orangehrm";
$user = "rariana";
$password = "rariana";

// Connexion à MySQL
$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die("Erreur de connexion à la base de données : " . mysqli_connect_error());
}

// Récupérer les données du formulaire
$email = mysqli_real_escape_string($conn, $_POST['email']);
$mdp = mysqli_real_escape_string($conn, $_POST['mdp']);

// Requête pour vérifier l'utilisateur
$query = "SELECT * FROM utilisateurs WHERE email = '$email' AND mot_de_passe = '$mdp'";
$result = mysqli_query($conn, $query);

if ($result) {
    if (mysqli_num_rows($result) > 0) {
        // Si la connexion est réussie, rediriger vers success.php
        header("Location: accueil.php");
        exit();
    } else {
        // Si échec, rediriger vers la page de connexion avec un message d'erreur
        header("Location: index.php?error=1");
        exit();
    }
} else {
    echo "Erreur dans la requête : " . mysqli_error($conn);
}

// Fermer la connexion
mysqli_close($conn);
?>
