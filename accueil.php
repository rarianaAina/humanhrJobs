<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plateforme de Recrutement</title>
    <link rel="stylesheet" href="style-accueil.css">
</head>

<body>
    <!-- Logo placé tout en haut de la page -->
    <div class="logo-container">
        <img src="../web/images/oherm_logo.png" alt="Logo" class="logo">
    </div>

    <!-- Contenu principal de la page -->
    <div class="container">
        <!-- Partie gauche avec les boutons -->
        <div class="left-section">
            <h1>Bienvenue sur notre Plateforme de recrutement</h1>
            <p> Choisissez :</p>
            <div class="button-container">

                <!-- Formulaire pour discuter avec le chatbot -->
                <form action="https://cdn.botpress.cloud/webchat/v2.2/shareable.html" method="GET" target="_blank">
                    <input type="hidden" name="configUrl" value="https://files.bpcontent.cloud/2024/11/13/11/20241113111737-X2H714H5.json">
                    <button type="submit" onmouseover="showInfo('infoChatbot')" onmouseout="hideInfo()">Discuter avec un Chat Bot</button>
                </form>
                <!-- Formulaire pour transformer un CV -->
                <form action="http://localhost:3000" method="GET">
                    <button type="submit" onmouseover="showInfo('infoTransformation')" onmouseout="hideInfo()">Transformer un CV</button>
                </form>

                <!-- Formulaire pour postuler -->
                <form action="http://localhost:8084/gestionrh/web/index.php/recruitmentApply/jobs.html" method="GET">
                    <button type="submit" onmouseover="showInfo('infoPostuler')" onmouseout="hideInfo()">Postuler</button>
                </form>

            </div>
        </div>

        <!-- Partie droite avec les informations dynamiques -->
        <div class="right-section">
            <!-- Texte par défaut à afficher lorsqu'aucun bouton n'est survolé -->
            <div id="defaultInfo" class="info-box">
                <p>Survolez un bouton pour voir les informations correspondantes.</p>
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
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>