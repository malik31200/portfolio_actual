FROM php:8.2-fpm

#Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    curl

# Install PHP extensions for Symfony
RUN docker-php-ext-install pdo pdo_mysql zip mbstring exif pcntl bcmath gd

# Install composer
COPY --from=compose:latest /usr/bin/composer /usr/bin/composer

# Define the working directory
WORKDIR /var/www/html

# Grant permissions
RUN chown -R www-data /var/www/html