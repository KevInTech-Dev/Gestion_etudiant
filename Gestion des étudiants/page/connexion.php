<?php
session_start();

// Configuration de la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "universite";

// Connexion à la base de données
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Échec de la connexion : " . mysqli_connect_error());
}

$message = ""; // Initialisez le message

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les valeurs du formulaire
    $emailAdmin = mysqli_real_escape_string($conn, $_POST['emailAdmin']);
    $passWordAdmin = $_POST['passWordAdmin'];

    // Requête pour récupérer l'administrateur avec l'email donné
    $sql = "SELECT idAdmin, passWordAdmin FROM administrateur WHERE emailAdmin = '$emailAdmin'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        // Debug: afficher le mot de passe haché
        // echo "Mot de passe haché : " . $row['passWordAdmin']; // Débogage

        // Vérifier le mot de passe
        if (password_verify($passWordAdmin, $row['passWordAdmin'])) {
            // Mot de passe correct, initialiser la session
            $_SESSION['idAdmin'] = $row['idAdmin'];
            header("Location: admin.php"); // Redirigez vers le tableau de bord
            exit();
        } else {
            $message = "Mot de passe incorrect.";
        }
    } else {
        $message = "Aucun administrateur trouvé avec cet email.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion Administrateur</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            width: 100%;
            padding: 10px;
            background: rgb(89, 70, 133);
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background: rgb(69, 50, 113);
        }
        .link-inscription {
            margin-top: 15px;
            text-align: center;
        }
        .error-message {
            color: red;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <a href="infouniversité.php"><img src="image/logoU1.png" alt="Logo Université"></a>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="propos.php">À propos</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="connexion.php" class="btn-connexion">Connexion</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="part1">
                <h2>Connexion</h2>
                <?php if (!empty($message)) { echo "<p class='error-message'>$message</p>"; } ?>
            </div>
            <form action="connexion.php" method="POST">
                <label for="emailAdmin">Email :</label>
                <input type="email" id="emailAdmin" name="emailAdmin" required>

                <label for="passWordAdmin">Mot de Passe :</label>
                <input type="password" id="passWordAdmin" name="passWordAdmin" required>

                <button type="submit">Se Connecter</button>
            </form>
            <div class="link-inscription">
                <p>Vous n'avez pas de compte ? <a href="inscription.php">Inscrivez-vous ici</a>.</p>
            </div>
        </div>
    </main>
</body>
</html>