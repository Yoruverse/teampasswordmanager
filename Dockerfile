# Usar una imagen base oficial de PHP con Apache
FROM php:8.2-apache

# Instalar extensiones necesarias de PHP y herramientas de sistema
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copiar los archivos de la aplicación al directorio web de Apache
COPY ./teampasswordmanager /var/www/html/teampasswordmanager
COPY ./utils/ixed.8.2.lin /usr/local/lib/php/extensions/no-debug-non-zts-20190902/ixed.8.2.lin

# Añadir la extensión ixed
RUN echo "extension=/usr/local/lib/php/extensions/no-debug-non-zts-20190902/ixed.8.2.lin" > /usr/local/etc/php/conf.d/ixed.ini

# Dar permisos adecuados
RUN chown -R www-data:www-data /var/www/html/teampasswordmanager
RUN chmod -R 755 /var/www/html/teampasswordmanager

# Exponer el puerto 80
EXPOSE 80

# Reiniciar Apache para aplicar los cambios
RUN service apache2 restart
