FROM php:8.4-fpm-alpine

# Install system dependencies
RUN apk add --no-cache \
bash \
git \
curl \
zip \
unzip \
sqlite \
sqlite-dev \
libpng-dev \
libzip-dev \
oniguruma-dev \
libxml2-dev \
nodejs \
npm \
&& docker-php-ext-install pdo_mysql pdo_sqlite mbstring zip exif pcntl

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . .

# Install dependencies
RUN composer install --no-dev --optimize-autoloader
RUN if [ -f package.json ]; then npm install; fi

# Set permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 storage bootstrap/cache

#  RUN php artisan migrate:fresh
#  COPY entrypoint.sh /usr/local/bin/entrypoint.sh
#  RUN chmod +x /usr/local/bin/entrypoint.sh

# HEALTHCHECK FOR COOLIFY


EXPOSE 8000

CMD ["php","artisan","serve"]
