FROM php:8.2-cli

# Définir le répertoire de travail
WORKDIR /app

# Copier le code source dans le conteneur
COPY . .

# Exposer le port (par exemple, 8080 pour PHP built-in server)
EXPOSE 8080

# Commande pour démarrer l'application
CMD ["php", "-S", "0.0.0.0:8080", "PHPpage.php"]
