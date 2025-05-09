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

// Initialisez le message
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les valeurs du formulaire
    $nomEtu = mysqli_real_escape_string($conn, $_POST['nomEtu']);
    $prenomEtu = mysqli_real_escape_string($conn, $_POST['prenomEtu']);
    $adresseEtu = mysqli_real_escape_string($conn, $_POST['adresseEtu']);
    $dateNais = mysqli_real_escape_string($conn, $_POST['dateNais']);
    $lieuNais = mysqli_real_escape_string($conn, $_POST['lieuNais']);
    $pays = mysqli_real_escape_string($conn, $_POST['pays']);
    $nationalite = mysqli_real_escape_string($conn, $_POST['nationalite']);
    $sexe = mysqli_real_escape_string($conn, $_POST['sexe']);
    $situation_matrimoniale = mysqli_real_escape_string($conn, $_POST['situation_matrimoniale']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $niveauEtude = mysqli_real_escape_string($conn, $_POST['niveauEtude']);
    $parcours = mysqli_real_escape_string($conn, $_POST['parcours']);
    $filiere = mysqli_real_escape_string($conn, $_POST['filiere']); // Utiliser 'filiere'
    
    // Gérer l'upload de fichiers si nécessaire
    $photo = $_FILES['photo']['name'];
    $acteNaissance = $_FILES['acteNaissance']['name'];
    $releve = $_FILES['releve']['name']; // Utiliser 'releve'

    // Dossier de destination pour les fichiers uploadés
    $targetDir = "uploads/";

    // Déplacer les fichiers téléchargés
    move_uploaded_file($_FILES['photo']['tmp_name'], $targetDir . $photo);
    move_uploaded_file($_FILES['acteNaissance']['tmp_name'], $targetDir . $acteNaissance);
    move_uploaded_file($_FILES['releve']['tmp_name'], $targetDir . $releve);

    // Requête d'insertion
    $sql = "INSERT INTO etudiant (nomEtu, prenomEtu, adresseEtu, dateNais, lieuNais, pays, nationalite, sexe,situation_matrimoniale,  email, niveauEtude, parcours, filiere, photo, acteNaissance, releve, dateInscription)
            VALUES ('$nomEtu', '$prenomEtu', '$adresseEtu', '$dateNais', '$lieuNais', '$pays', '$nationalite' , '$sexe','$situation_matrimoniale', '$email', '$niveauEtude', '$parcours', '$filiere', '$photo', '$acteNaissance', '$releve', NOW())";

    //Débogage : Afficher la requête
    //echo $sql;

    if (mysqli_query($conn, $sql)) {
        $message = "L'étudiant $nomEtu $prenomEtu a été enregistré avec succès.";
    } else {
        $message = "Erreur : " . mysqli_error($conn);
    }
}

// Fermer la connexion
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message d'Inscription</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Résultat de l'Inscription</h1>
    </header>
    <main>
        <div class="container">
            <p><?php echo $message; ?></p>
            <a href="admin.php" class="btn-connexion">Retour</a>
        </div>
    </main>
</body>
</html>