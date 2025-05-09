<?php 
session_start(); 
error_reporting(E_ALL);
ini_set('display_errors', '1');

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "universite"; 

$conn = mysqli_connect($servername, $username, $password, $dbname); 

if (!$conn) { 
    die("Connexion échouée " . mysqli_connect_error()); 
} 

$conn->set_charset("utf8mb4");   

$message = ""; // Initialisez le message

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    echo "Formulaire soumis"; // Pour déboguer

    $nomAdmin = mysqli_real_escape_string($conn, $_POST['nomAdmin']); 
    $prenomAdmin = mysqli_real_escape_string($conn, $_POST['prenomAdmin']); 
    $numTelAdmin = mysqli_real_escape_string($conn, $_POST['numTelAdmin']); 
    $emailAdmin = mysqli_real_escape_string($conn, $_POST['emailAdmin']); 
    $passWordAdmin = mysqli_real_escape_string($conn, $_POST['passWordAdmin']); 

    // Vérifiez si les mots de passe correspondent
    if ($passWordAdmin !== $_POST['confirmPassWord']) {
        $message = "Les mots de passe ne correspondent pas.";
    } else {
        $checkEmailQuery = "SELECT COUNT(*) FROM administrateur WHERE emailAdmin = '$emailAdmin'"; 
        $checkEmailResult = mysqli_query($conn, $checkEmailQuery); 
        if (!$checkEmailResult) {
            die("Erreur de requête : " . mysqli_error($conn));
        }
        $emailCount = mysqli_fetch_row($checkEmailResult)[0]; 

        if ($emailCount > 0) { 
            $message = "Cette adresse email est déjà utilisée."; 
        } else { 
            // Insertion sans confirmPassWord
            //$sql = "INSERT INTO administrateur (nomAdmin, prenomAdmin, numTelAdmin, emailAdmin, passWordAdmin) VALUES ('{$nomAdmin}', '{$prenomAdmin}', '{$numTelAdmin}', '{$emailAdmin}', '{$passWordAdmin}')";
            $hashedPassword = password_hash($passWordAdmin, PASSWORD_DEFAULT);
            $sql = "INSERT INTO administrateur (nomAdmin, prenomAdmin, numTelAdmin, emailAdmin, passWordAdmin) VALUES ('{$nomAdmin}', '{$prenomAdmin}', '{$numTelAdmin}', '{$emailAdmin}', '$hashedPassword')";
            if(mysqli_query($conn, $sql)) {  
                $idAdmin = mysqli_insert_id($conn);
                $_SESSION['idAdmin'] = $idAdmin;
                $message = "Inscription effectuée avec succès ! Connectez-vous. Merci !";
                $_SESSION['message'] = $message;
                header("Location: connexion.php?idAdmin=$idAdmin"); 
                exit;
            } else { 
                $message = "Erreur : " . mysqli_error($conn);
            } 
        } 
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription Administrateur</title>
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
        input[type="text"],
        input[type="tel"],
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
        .link-connexion {
            margin-top: 15px;
            display: block;
            text-align: center;
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
                <h1>Espace Administrateur</h1>
            </div>
            <h2>Inscription</h2>
            <?php if (!empty($message)) { echo "<p style='color: red;'>$message</p>"; } ?>
            <form action="inscription.php" method="POST">
                <label for="nomAdmin">Nom :</label>
                <input type="text" id="nomAdmin" name="nomAdmin" required>

                <label for="prenomAdmin">Prénom :</label>
                <input type="text" id="prenomAdmin" name="prenomAdmin" required>

                <label for="numTelAdmin">Numéro de Téléphone :</label>
                <input type="tel" id="numTelAdmin" name="numTelAdmin">

                <label for="emailAdmin">Email :</label>
                <input type="email" id="emailAdmin" name="emailAdmin" required>

                <label for="passWordAdmin">Mot de Passe :</label>
                <input type="password" id="passWordAdmin" name="passWordAdmin" required>
                
                <label for="confirmPassWord">Confirmer le Mot de Passe :</label>
                <input type="password" id="confirmPassWord" name="confirmPassWord" required>

                <button type="submit">S'inscrire</button>
            </form>
            <div class="link-connexion">
                <p>Vous avez déjà un compte ? <a href="connexion.php">Connectez-vous ici</a>.</p>
            </div>
        </div>
    </main>
</body>
</html>