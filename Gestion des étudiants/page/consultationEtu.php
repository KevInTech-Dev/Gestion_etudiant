<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultation d'Étudiant</title>
    <style>
        body {
            font-family: 'Verdana', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #d0cccc; 
        }
        header {
            background: rgb(89, 70, 133); 
            color: white;
            padding: 20px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: white;
            margin-bottom: 20px;
            text-align: left;
        }
        .student-card {
            margin-bottom: 20px;
            padding: 15px;
            border: 1px solid rgb(89, 70, 133);
            border-radius: 5px;
            background: #f9f9f9; 
            transition: background 0.3s;
        }
        .student-card:hover {
            background: #e6e6e6; 
        }
        label {
            font-weight: bold;
            color: rgb(89, 70, 133);
            display: block; 
        }
        .value {
            margin-top: 5px;
            color: #333; 
        }
        .file-link {
            margin-top: 5px;
            display: inline-block;
            color: rgb(89, 70, 133);
        }
        .button {
            margin-top: 10px;
            padding: 5px 10px;
            background: rgb(89, 70, 133);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
            display: inline-block;
            margin-right: 10px;
        }
        .button:hover {
            background: rgba(89, 70, 133, 0.8);
        }
        .back-button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background: rgb(89, 70, 133);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
        }
        .back-button:hover {
            background: rgba(89, 70, 133, 0.8);
        }
    </style>
</head>
<body>
    <header>
        <h1>Liste des Étudiants</h1>
    </header>
    <main>
        <div class="container">
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

            // Récupérer les données des étudiants
            $sql = "SELECT * FROM etudiant";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) == 0) {
                echo "<h2>Aucune inscription pour le moment.</h2>";
            } else {
                while ($etudiant = mysqli_fetch_assoc($result)) {
                    echo '<div class="student-card">';
                    echo '<label>Nom :</label><span class="value">' . htmlspecialchars($etudiant['nomEtu']) . '</span>';
                    echo '<label>Prénom :</label><span class="value">' . htmlspecialchars($etudiant['prenomEtu']) . '</span>';
                    echo '<label>Adresse :</label><span class="value">' . htmlspecialchars($etudiant['adresseEtu']) . '</span>';
                    echo '<label>Date de Naissance :</label><span class="value">' . htmlspecialchars($etudiant['dateNais']) . '</span>';
                    echo '<label>Lieu de Naissance :</label><span class="value">' . htmlspecialchars($etudiant['lieuNais']) . '</span>';
                    echo '<label>Pays :</label><span class="value">' . htmlspecialchars($etudiant['pays']) . '</span>';
                    echo '<label>Nationalité :</label><span class="value">' . htmlspecialchars($etudiant['nationalite']) . '</span>';
                    echo '<label>Situation Matrimoniale :</label><span class="value">' . htmlspecialchars($etudiant['situation_matrimoniale']) . '</span>';
                    echo '<label>Sexe :</label><span class="value">' . htmlspecialchars($etudiant['sexe']) . '</span>';
                    echo '<label>Adresse Email :</label><span class="value">' . htmlspecialchars($etudiant['email']) . '</span>';
                    echo '<label>Niveau d\'Étude :</label><span class="value">' . htmlspecialchars($etudiant['niveauEtude']) . '</span>';
                    echo '<label>Parcours :</label><span class="value">' . htmlspecialchars($etudiant['parcours']) . '</span>';
                    echo '<label>Filière :</label><span class="value">' . htmlspecialchars($etudiant['filiere']) . '</span>';
                    
                    // Affichage de la photo
                    if (!empty($etudiant['photo'])) {
                        echo '<label>Photo :</label>';
                        echo '<img src="uploads/' . htmlspecialchars($etudiant['photo']) . '" alt="Photo de ' . htmlspecialchars($etudiant['nomEtu']) . '" style="max-width: 100px; border-radius: 5px;">';
                    }

                    // Affichage du relevé
                    if (!empty($etudiant['releve'])) {
                        echo '<label>Relevé :</label>';
                        echo '<a class="file-link" href="uploads/' . htmlspecialchars($etudiant['releve']) . '" target="_blank">Télécharger le relevé</a>';
                    }

                    // Affichage de l'acte de naissance
                    if (!empty($etudiant['acteNaissance'])) {
                        echo '<label>Acte de Naissance :</label>';
                        echo '<a class="file-link" href="uploads/' . htmlspecialchars($etudiant['acteNaissance']) . '" target="_blank">Télécharger l\'acte de naissance</a>';echo '<br>', '<br>';
                    }

                    // Boutons Modifier et Supprimer
                    echo '<a class="button" href="modifierEtu.php?id=' . htmlspecialchars($etudiant['idEtu']) . '">Modifier</a>'; 
                    echo '<a class="button" href="supprimerEtu.php?id=' . htmlspecialchars($etudiant['idEtu']) . '" onclick="return confirm(\'Êtes-vous sûr de vouloir supprimer cet étudiant ?\')">Supprimer</a>';

                    echo '</div>'; // Ferme le div student-card
                }
            }

            // Fermer la connexion
            mysqli_close($conn);
            ?>
            <a class="back-button" href="ajoutEtu.php">Ajouter un Étudiant</a>
            <a class="back-button" href="admin.php">Retour</a>
        </div>
    </main>
</body>
</html>