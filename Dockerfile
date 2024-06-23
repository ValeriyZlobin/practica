# Use the official PHP image with Apache
FROM php:7.4-apache

# Install mysqli extension for PHP
RUN docker-php-ext-install mysqli

# Copy application files to the Apache document root
COPY . /var/www/html/

COPY apache-config.conf /etc/apache2/sites-available/000-default.conf

# Set the working directory
WORKDIR /var/www/html/

RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html

# Expose port 80 for the web server
EXPOSE 80
