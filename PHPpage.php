<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemple PHP</title>
</head>
<body>
    <h1>Information de l'université</h1>
    <h2>Connexion</h2>

    <?php
        // Déclarer une variable
        $nom = "Jonatas";
        echo "<p>Bonjour, je m'appelle $nom !</p>";

        // Afficher la date actuelle
        echo "<p>Nous sommes le : " . date("d/m/Y") . "</p>";

        // Exemple de boucle
        echo "<h2>Liste des nombres de 1 à 5 :</h2>";
        echo "<ul>";
        for ($i = 1; $i <= 5; $i++) {
            echo "<li>Numéro : $i</li>";
        }
        echo "</ul>";

        // Exemple de fonction PHP
        function saluer($prenom) {
            return "Salut $prenom, comment ça va ?";
        }

        // Appeler la fonction
        echo "<p>" . saluer("Lucas") . "</p>";
    ?>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Mon site PHP</p>
    </footer>
</body>
</html>
