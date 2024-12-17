<?php

// Fonction pour rediriger vers une page
function redirect($url) {
    header("Location: $url");
    exit();
}

// Fonction pour échapper les données avant affichage
function escapeHtml($data) {
    return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
}

// Exemple : récupérer tous les utilisateurs depuis la base de données
function getAllUsers() {
    $pdo = getDatabaseConnection();
    $stmt = $pdo->query("SELECT * FROM users");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

?>
