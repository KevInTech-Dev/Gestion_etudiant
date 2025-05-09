<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "universite";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Échec de la connexion : " . mysqli_connect_error());
}

// Vérifier si l'ID de l'étudiant est passé en paramètre
if (isset($_GET['id'])) {
    $idEtu = intval($_GET['id']);
    
    // Supprimer l'étudiant
    $deleteSql = "DELETE FROM etudiant WHERE idEtu = $idEtu";
    
    if (mysqli_query($conn, $deleteSql)) {
        echo "Étudiant supprimé avec succès.";
    } else {
        echo "Erreur : " . mysqli_error($conn);
    }
} else {
    die("ID étudiant non spécifié.");
}

// Fermer la connexion
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suppression Étudiant</title>
    <style>
        body { font-family: 'Verdana', sans-serif; }
        .container { max-width: 600px; margin: auto; padding: 20px; background: #f9f9f9; border-radius: 10px; }
        h1 { color: rgb(89, 70, 133); }
        .button { padding: 10px 20px; background: rgb(89, 70, 133); color: white; border: none; border-radius: 5px; cursor: pointer; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Suppression Étudiant</h1>
        <p>Retour à la liste des étudiants pour vérifier les changements.</p>
        <a href="index.php" class="button">Retour</a>
    </div>
</body>
</html>