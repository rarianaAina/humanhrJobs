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

// Démarrer la session
session_start();

// Récupérer les données du formulaire
$email = mysqli_real_escape_string($conn, $_POST['email']);
$mdp = mysqli_real_escape_string($conn, $_POST['mdp']);

// Requête pour vérifier l'utilisateur
$query = "SELECT * FROM ohrm_job_candidate WHERE email = '$email' AND PASSWORD = '$mdp'";
$result = mysqli_query($conn, $query);

if ($result) {
    if (mysqli_num_rows($result) > 0) {
        // Récupérer les données de l'utilisateur
        $user = mysqli_fetch_assoc($result);

        // Stocker les informations dans la session
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['email'] = $user['email'];

        // Formulaire POST caché pour envoyer l'ID de l'utilisateur
        echo "<form id='redirectForm' action='accueil.php' method='POST'>";
        echo "<input type='hidden' name='user_id' value='" . $_SESSION['user_id'] . "' />";
        echo "<script>document.getElementById('redirectForm').submit();</script>";
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
