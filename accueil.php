<?php
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['user_id'])) {
    // Rediriger vers la page de connexion si la session n'est pas active
    header("Location: index.php");
    exit();
}

echo "Bienvenue, utilisateur ID : " . $_SESSION['user_id'] . "<br>";
echo "Email : " . $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plateforme de Recrutement</title>
    <link rel="stylesheet" href="style-accueil.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body>
    <div class="logout-container">
        <form action="logout.php" method="POST">
            <button type="submit" class="logout-button">Se déconnecter</button>
        </form>
    </div>
    <div class="logo-container">
        <img src="../web/images/oherm_logo.png" alt="Logo" class="logo">
    </div>

    <div class="container">

        <div class="left-section">
            <h1>Bienvenue sur notre Plateforme de recrutement</h1>
            <p> Choisissez :</p>
            <div class="button-container">


                <form action="https://cdn.botpress.cloud/webchat/v2.2/shareable.html" method="GET" target="_blank">
                    <div class="button-with-icon">
                        <i class="fas fa-comments"></i> <!-- Icône du chatbot -->
                        <button type="submit" onmouseover="showInfo('infoChatbot')" onmouseout="hideInfo()">Discuter avec un Chat Bot</button>
                    </div>
                </form>

                <!-- Formulaire pour transformer un CV -->
                <form action="http://localhost:3000" method="GET">
                    <div class="button-with-icon">
                        <i class="fas fa-file-upload"></i> <!-- Icône pour télécharger un fichier -->
                        <button type="submit" onmouseover="showInfo('infoTransformation')" onmouseout="hideInfo()">Transformer un CV</button>
                    </div>
                </form>

                <!-- Formulaire pour simulation de projets & tests techniques -->
                <form action="" method="GET">
                    <div class="button-with-icon">
                        <i class="fas fa-clipboard-check"></i>
                        <button type="submit" onmouseover="showInfo('infoTestTechnique')" onmouseout="hideInfo()">Simulation de projets & Tests techniques</button>
                    </div>
                </form>

                <!-- Formulaire pour postuler -->
                <form action="offres.php" method="GET">
                    <div class="button-with-icon">
                        <i class="fas fa-briefcase"></i>
                        <button type="submit" onmouseover="showInfo('infoPostuler')" onmouseout="hideInfo()">Nos offres</button>
                    </div>
                </form>

                <form action="notifications.php" method="GET">
                    <div class="button-with-icon">
                        <i class="fa fa-envelope"></i>
                        <button type="submit" onmouseover="showInfo('infoNotifications')" onmouseout="hideInfo()">Vos Notifications</button>
                    </div>
                </form>

            </div>
        </div>

        <!-- Partie droite avec les informations dynamiques -->
        <div class="right-section">
            <!-- Texte par défaut à afficher lorsqu'aucun bouton n'est survolé -->
            <div id="defaultInfo" class="info-box">
                <p>Survolez un bouton pour voir les informations correspondantes.</p>
            </div>
            <div id="societeInfo" class="info-box">
                <img src="logo.png" alt="Logo-logo" class="logo">
                <p>Copyright 2024 - ETU000739</p>
            </div>

            <div id="infoPostuler" class="info-box" style="display: none;">
                <p>En appuyant sur ce bouton, vous allez pouvoir postuler pour une offre. </p>
            </div>
            <div id="infoChatbot" class="info-box" style="display: none;">
                <p>Discutez avec notre chatbot pour</p><br>
                <p>- Obtenir des informations sur la société.</p>
                <p>- Savoir les étapes de notre recrutement</p>
                <p>- Savoir quels sont les postes disponibles</p>
            </div>
            <div id="infoTransformation" class="info-box" style="display: none;">
                <p>Avec ce bouton :</p><br>
                <p>- Vous pourrez transformer votre CV sous format texte</p>
                <p>- Le fichier texte sera copié dans le formulaire lorsque vous postulerez</p>
                <p>- Cela aidera directement nos services recrutement pour vous choisir </p>
            </div>
            <div id="infoTestTechnique" class="info-box" style="display: none;">
                <p>Test technique</p>
            </div>
            <div id="infoNotifications" class="info-box" style="display: none;">
                <p>Vous pouvez voir ici les notifications pour les offres sur lesquelles vous avez postulé</p>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>