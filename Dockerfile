# Usar una imagen base oficial de PHP con Apache
FROM php:7.4-apache

# Instalar extensiones necesarias de PHP y herramientas de sistema
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copiar los archivos de la aplicación al directorio web de Apache
COPY ./teampasswordmanager /var/www/html/teampasswordmanager

# Dar permisos adecuados
RUN chown -R www-data:www-data /var/www/html/teampasswordmanager

# Exponer el puerto 80
EXPOSE 80

# Configurar la variable de entorno para PHP
ENV APACHE_DOCUMENT_ROOT /var/www/html/teampasswordmanager

# Reiniciar Apache para aplicar los cambios
RUN service apache2 restart
