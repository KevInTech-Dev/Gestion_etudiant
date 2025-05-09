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
    
    // Récupérer les données de l'étudiant
    $sql = "SELECT * FROM etudiant WHERE idEtu = $idEtu";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) == 0) {
        die("Aucun étudiant trouvé.");
    }
    
    $etudiant = mysqli_fetch_assoc($result);
} else {
    die("ID étudiant non spécifié.");
}

// Traitement du formulaire de modification
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nomEtu = mysqli_real_escape_string($conn, $_POST['nomEtu']);
    $prenomEtu = mysqli_real_escape_string($conn, $_POST['prenomEtu']);
    $adresseEtu = mysqli_real_escape_string($conn, $_POST['adresseEtu']);
    $dateNais = mysqli_real_escape_string($conn, $_POST['dateNais']);
    $lieuNais = mysqli_real_escape_string($conn, $_POST['lieuNais']);
    $pays = mysqli_real_escape_string($conn, $_POST['pays']);
    $nationalite = mysqli_real_escape_string($conn, $_POST['nationalite']);
    $situation_matrimoniale = mysqli_real_escape_string($conn, $_POST['situation_matrimoniale']);
    $sexe = mysqli_real_escape_string($conn, $_POST['sexe']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $niveauEtude = mysqli_real_escape_string($conn, $_POST['niveauEtude']);
    $parcours = mysqli_real_escape_string($conn, $_POST['parcours']);
    $filiere = mysqli_real_escape_string($conn, $_POST['filiere']);
    
    // Mettre à jour l'étudiant
    $updateSql = "UPDATE etudiant SET 
        nomEtu = '$nomEtu', 
        prenomEtu = '$prenomEtu', 
        adresseEtu = '$adresseEtu', 
        dateNais = '$dateNais', 
        lieuNais = '$lieuNais', 
        pays = '$pays', 
        nationalite = '$nationalite', 
        situation_matrimoniale = '$situation_matrimoniale', 
        sexe = '$sexe', 
        email = '$email', 
        niveauEtude = '$niveauEtude', 
        parcours = '$parcours', 
        filiere = '$filiere' 
        WHERE idEtu = $idEtu";

    if (mysqli_query($conn, $updateSql)) {
        echo "Informations mises à jour avec succès.";
    } else {
        echo "Erreur : " . mysqli_error($conn);
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
    <title>Modifier Étudiant</title>
    <style>
        body { font-family: 'Verdana', sans-serif; }
        .container { max-width: 600px; margin: auto; padding: 20px; background: #f9f9f9; border-radius: 10px; }
        h1 { color: rgb(89, 70, 133); }
        label { font-weight: bold; }
        input, select { width: 100%; padding: 8px; margin: 10px 0; }
        .button { padding: 10px 20px; background: rgb(89, 70, 133); color: white; border: none; border-radius: 5px; cursor: pointer; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Modifier Étudiant</h1>
        <form method="POST">
            <label>Nom :</label>
            <input type="text" name="nomEtu" value="<?php echo htmlspecialchars($etudiant['nomEtu']); ?>" required>

            <label>Prénom :</label>
            <input type="text" name="prenomEtu" value="<?php echo htmlspecialchars($etudiant['prenomEtu']); ?>" required>

            <label>Adresse :</label>
            <input type="text" name="adresseEtu" value="<?php echo htmlspecialchars($etudiant['adresseEtu']); ?>" required>

            <label>Date de Naissance :</label>
            <input type="date" name="dateNais" value="<?php echo htmlspecialchars($etudiant['dateNais']); ?>" required>

            <label>Lieu de Naissance :</label>
            <input type="text" name="lieuNais" value="<?php echo htmlspecialchars($etudiant['lieuNais']); ?>" required>

            <label>Pays :</label>
            <input type="text" name="pays" value="<?php echo htmlspecialchars($etudiant['pays']); ?>" required>

            <label>Nationalité :</label>
            <input type="text" name="nationalite" value="<?php echo htmlspecialchars($etudiant['nationalite']); ?>" required>

            <label>Situation Matrimoniale :</label>
            <input type="text" name="situation_matrimoniale" value="<?php echo htmlspecialchars($etudiant['situation_matrimoniale']); ?>" required>

            <label>Sexe :</label>
            <select name="sexe" required>
                <option value="Masculin" <?php if ($etudiant['sexe'] == 'Masculin') echo 'selected'; ?>>Masculin</option>
                <option value="Féminin" <?php if ($etudiant['sexe'] == 'Féminin') echo 'selected'; ?>>Féminin</option>
            </select>

            <label>Adresse Email :</label>
            <input type="email" name="email" value="<?php echo htmlspecialchars($etudiant['email']); ?>" required>

            <label>Niveau d'Étude :</label>
            <input type="text" name="niveauEtude" value="<?php echo htmlspecialchars($etudiant['niveauEtude']); ?>" required>

            <label>Parcours :</label>
            <input type="text" name="parcours" value="<?php echo htmlspecialchars($etudiant['parcours']); ?>" required>

            <label>Filière :</label>
            <input type="text" name="filiere" value="<?php echo htmlspecialchars($etudiant['filiere']); ?>" required>

            <button type="submit" class="button">Sauvegarder</button>
        </form><br><br>
        <a href="consultationEtu.php" class="button">Retour</a>
    </div>
</body>
</html>