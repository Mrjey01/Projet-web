<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Charger Composer

// Charger les variables d'environnement
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

// Configuration globale
define('DB_HOST', $_ENV['DB_HOST']);
define('DB_NAME', $_ENV['DB_NAME']);
define('DB_USER', $_ENV['DB_USER']);
define('DB_PASS', $_ENV['DB_PASS']);
define('BASE_URL', 'http://localhost'); // Remplace par l'URL de ton projet
?>
