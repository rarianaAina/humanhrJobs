<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plateforme de Recrutement</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 100px;
            background-color: #f4f4f9;
        }
        h1 {
            color: #333;
        }
        .button-container {
            margin-top: 50px;
        }
        button {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 15px 30px;
            margin: 10px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Bienvenue sur notre Plateforme</h1>
    <p>Choisissez une action :</p>
    <div class="button-container">
        <!-- Bouton pour postuler -->
        <form action="http://localhost:8084/gestionrh/web/index.php/recruitmentApply/jobs.html" method="GET">
            <button type="submit">Postuler</button>
        </form>

        <!-- Bouton pour discuter avec le chatbot -->
        <form action="https://cdn.botpress.cloud/webchat/v2.2/shareable.html" method="GET" target="_blank">
            <input type="hidden" name="configUrl" value="https://files.bpcontent.cloud/2024/11/13/11/20241113111737-X2H714H5.json">
            <button type="submit">Discuter avec un Chat Bot</button>
        </form>
    </div>
</body>
</html>
