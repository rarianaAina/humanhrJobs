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

// Paramètres de connexion à la base de données
$host = "localhost";
$username = "rariana";
$password = "rariana";
$database = "orangehrm";

// Connexion à la base de données
$conn = new mysqli($host, $username, $password, $database);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Connexion échouée: " . $conn->connect_error);
}

// Utiliser l'ID du candidat stocké dans la session
$candidate_id = $_SESSION['user_id'];  // Remplacer $_GET['user_id'] par $_SESSION['user_id']
echo "Candidat ID : " . $candidate_id . "<br>";

// Vérifier si un ID de candidat est fourni
if ($candidate_id == 0) {
    echo "Aucun ID de candidat fourni.";
    exit;
}

// Récupérer les actions liées au candidat
$sql = "SELECT action, performed_date FROM ohrm_job_candidate_history WHERE candidate_id = ? ORDER BY performed_date DESC";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $candidate_id);
$stmt->execute();
$result = $stmt->get_result();

// Tableau pour stocker les notifications
$notifications = [];

// Tableau des actions possibles
$action_labels = [
    17 => "Candidature commencée",
    2 => "Pré-sélectionné",
    4 => "Interview planifié",
    5 => "L'entretien s'est bien passé",
    7 => "La société vous propose le job si cela vous intéresse",
    9 => "Vous êtes embauché"
];

// Boucle pour récupérer et afficher les notifications
while ($row = $result->fetch_assoc()) {
    $action = $row['action'];
    $performed_date = $row['performed_date'];

    // Vérifier si l'action existe dans le tableau des libellés
    $action_label = isset($action_labels[$action]) ? $action_labels[$action] : "Action inconnue";

    // Ajouter à la liste des notifications
    $notifications[] = [
        'action' => $action_label,
        'date' => $performed_date
    ];
}

// Vérifier s'il y a des notifications
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifications Candidat</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(45deg, #9ec7ae, #6bd4ca);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }

        .container {
            width: 80%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            color: #4CAF50;
            text-align: center;
        }

        .notifications {
            margin-top: 20px;
        }

        .notification-item {
            background-color: #fff;
            padding: 15px;
            margin-bottom: 15px;
            border-left: 5px solid #4CAF50;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
        }

        .notification-item:hover {
            background-color: #f9f9f9;
        }

        .notification-action {
            font-weight: bold;
            color: #333;
            font-size: 1.1em;
        }

        .notification-date {
            font-size: 0.9em;
            color: #888;
        }

        .empty-message {
            text-align: center;
            font-size: 1.2em;
            color: #777;
        }

        .footer {
            text-align: center;
            margin-top: 40px;
            padding: 20px;
            background-color: #4CAF50;
            color: white;
            font-size: 1em;
            border-radius: 5px;
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="retour">
            <a href="accueil.php" class="btn btn-back">Retourner à l'accueil</a>
        </div>
        <h1>Notifications du Candidat</h1>

        <?php if (count($notifications) > 0) : ?>
            <div class="notifications">
                <?php foreach ($notifications as $notification) : ?>
                    <div class="notification-item">
                        <div class="notification-action"><?php echo $notification['action']; ?></div>
                        <div class="notification-date"><?php echo $notification['date']; ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else : ?>
            <div class="empty-message">
                Aucune notification pour ce candidat.
            </div>
        <?php endif; ?>

    </div>

    <div class="footer">
        <p>© 2024 HUMAN HR</p>
    </div>

</body>

</html>

<?php
// Fermeture de la connexion à la base de données
$stmt->close();
$conn->close();
?>