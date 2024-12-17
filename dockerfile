# Utiliser une image de base avec PHP et Apache
FROM php:8.1-apache

# Installer les extensions nécessaires pour PHP (par exemple, pdo et pdo_mysql)
RUN docker-php-ext-install pdo pdo_mysql

# Copier tous les fichiers de ton projet dans l'image Docker
COPY ./src /var/www/html/src
COPY ./public /var/www/html/public
COPY ./libre /var/www/html/libre

# Changer les permissions des fichiers pour Apache
RUN chown -R www-data:www-data /var/www/html

# Exposer le port 80 pour accéder à l'application
EXPOSE 80

# Démarrer Apache en mode premier plan
CMD ["apache2-foreground"]
