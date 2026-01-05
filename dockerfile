# Use PHP 8.2 FPM
FROM php:8.2-fpm

WORKDIR /var/www/html

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    libzip-dev \
    sqlite3 \
    libsqlite3-dev \
    && docker-php-ext-install pdo_mysql pdo_sqlite mbstring exif pcntl bcmath gd zip

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copy project files into container
COPY . /var/www/html

# Fix Windows Git ownership issues
RUN git config --global --add safe.directory /var/www/html

# Install PHP dependencies
# RUN composer install --no-dev --optimize-autoloader

# Ensure storage & bootstrap cache have correct permissions
RUN mkdir -p storage/framework storage/logs bootstrap/cache \
    && chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

# SQLite (optional)
RUN mkdir -p database && touch database/database.sqlite


EXPOSE 9000

CMD ["php-fpm"]
