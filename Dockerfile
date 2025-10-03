# Dockerfile
FROM php:8.2-fpm

# Instalar dependências do sistema
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    libzip-dev \
    supervisor \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Definir diretório de trabalho
WORKDIR /var/www/html

# Copiar apenas composer.json e composer.lock
COPY composer.json composer.lock ./

# Instalar dependências SEM executar scripts (evita erro com artisan ausente)
RUN composer install --no-dev --no-scripts --no-autoloader --optimize-autoloader --no-interaction

# Agora copiar todo o código (incluindo artisan)
COPY . .

# Gerar o autoloader (agora com artisan presente)
RUN composer dump-autoload --optimize

# Dar permissões
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 9000

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
