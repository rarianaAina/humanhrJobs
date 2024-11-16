<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <h2 class="title">Connexion :</h2>
        <form action="traitement.php" method="post">
            <p>Email :</p>
            <input type="text" name="email" required>
            <p>Mot de passe :</p>
            <input type="password" name="mdp" required>
            <input type="submit" value="Connexion">
            <?php
            if (isset($_GET['error']) && $_GET['error'] == 1) {
                echo "<p class='error-message'>Email ou mot de passe incorrect.</p>";
            }
            ?>
        </form>
    </div>
</body>

</html>