FROM php:8.2-cli

# Définir le répertoire de travail
WORKDIR /app

# Copier le code source dans le conteneur
COPY . .

# Exposer le port dynamique (Railway peut utiliser un autre port)
EXPOSE 8080

# Utiliser la variable d'environnement $PORT ou 8080 par défaut
CMD ["php", "-S", "0.0.0.0:${PORT:-8080}", "PHPpage.php"]
