# Use PHP 8.2 image as the base image
FROM php:8.2-fpm

# Set working directory
WORKDIR /var/www

# Install system dependencies for PHP
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    zip \
    git \
    curl \
    libmcrypt-dev \
    libicu-dev \
    libxml2-dev \
    libpng-dev \
    libjpeg-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql intl opcache

# Install Composer (PHP dependency manager)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy application code to the container
COPY . .

# Install Laravel dependencies
RUN composer install --no-dev --optimize-autoloader

# Configure Nginx
COPY nginx/default.conf /etc/nginx/conf.d/

# Expose port 8000
EXPOSE 80

# Command to start the PHP-FPM server (or any other web server you use)
CMD service nginx start && php-fpm

