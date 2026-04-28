FROM php:8.5-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libzip-dev \
    zip \
    unzip

# Install PHP extensions for MySQL
RUN docker-php-ext-install pdo pdo_mysql

# Set working directory
WORKDIR /var/www/html