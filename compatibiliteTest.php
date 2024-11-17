<?php
session_start();

// Vérifier si l'utilisateur a déjà passé un test
if (isset($_SESSION['last_test_time']) && (time() - $_SESSION['last_test_time']) < 300) {
    $remaining_time = 300 - (time() - $_SESSION['last_test_time']);
    $message = "Vous devez attendre " . round($remaining_time / 60) . " minutes avant de passer un autre test.";
    echo "<script>alert('$message'); window.history.back();</script>";
    exit();
}

// Définir les questions et les réponses pour chaque type de test
$tests = [
    'psycho_technique' => [
        [
            "question" => "Que signifie l'acronyme 'PHP' ?",
            "choices" => [
                "A" => "Personal Hypertext Processor",
                "B" => "Private Home Page",
                "C" => "PHP: Hypertext Preprocessor",
                "D" => "Pretext Hypertext Processor"
            ],
            "answer" => "C"
        ],
        [
            "question" => "Quel opérateur est utilisé pour la concaténation en PHP ?",
            "choices" => [
                "A" => "+",
                "B" => ".",
                "C" => "&",
                "D" => "-"
            ],
            "answer" => "B"
        ]
    ],
    'culturel' => [
        [
            "question" => "Qui a écrit 'Les Misérables' ?",
            "choices" => [
                "A" => "Emile Zola",
                "B" => "Victor Hugo",
                "C" => "Marcel Proust",
                "D" => "Albert Camus"
            ],
            "answer" => "B"
        ],
        [
            "question" => "Quel est le plus grand désert du monde ?",
            "choices" => [
                "A" => "Le Sahara",
                "B" => "Le désert de Gobi",
                "C" => "L'Antarctique",
                "D" => "Le Kalahari"
            ],
            "answer" => "C"
        ]
    ]
];

// Récupérer le type de test sélectionné par l'utilisateur
$test_type = $_GET['test'] ?? 'psycho_technique'; // par défaut psycho_technique

// Traitement du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $score = 0;
    foreach ($tests[$test_type] as $index => $test) {
        $userAnswer = $_POST["q" . $index] ?? null;
        if ($userAnswer === $test["answer"]) {
            $score++;
        }
    }
    $_SESSION['score'] = $score;
    $_SESSION['last_test_time'] = time(); // Mémoriser l'heure du dernier test
    header("Location: result.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Psycho-Technique et Culturel</title>
    <style>
        /* Style de base pour la page */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .question {
            margin-bottom: 20px;
        }
        .choices label {
            display: block;
            margin-bottom: 5px;
        }
        .submit-btn {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        .submit-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>

<div class="container">
    <h1>Test : <?php echo ucfirst($test_type == 'psycho_technique' ? 'Psycho-Technique' : 'Culturel'); ?></h1>

    <form method="POST">
        <?php foreach ($tests[$test_type] as $index => $test) : ?>
            <div class="question">
                <p><strong>Question <?php echo $index + 1; ?>:</strong> <?php echo $test["question"]; ?></p>
                <div class="choices">
                    <?php foreach ($test["choices"] as $key => $choice) : ?>
                        <label>
                            <input type="radio" name="q<?php echo $index; ?>" value="<?php echo $key; ?>" required> <?php echo $choice; ?>
                        </label>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>

        <button type="submit" class="submit-btn">Soumettre</button>
    </form>
</div>

</body>

</html>
