# Usa PHP 8.2 com FPM (recomendado para Laravel 11)
FROM php:8.2-fpm

# Instala dependências do sistema necessárias
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    zip \
    unzip \
    supervisor \
    libpq-dev \
    && docker-php-ext-install \
    pdo_mysql \
    pdo_pgsql \
    pgsql \
    mbstring \
    exif \
    pcntl \
    bcmath \
    gd \
    zip

# Instala Composer globalmente
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Define o diretório de trabalho
WORKDIR /var/www/html

# Copia apenas os arquivos do Composer primeiro (para melhor cache no build)
COPY composer.json composer.lock ./

# Instala dependências SEM executar scripts/plugins (evita falhas por falta do artisan ou execução como root)
# COMPOSER_ALLOW_SUPERUSER=1 é seguro em containers e evita desativação de plugins/scripts
RUN COMPOSER_ALLOW_SUPERUSER=1 composer install \
    --no-dev \
    --no-scripts \
    --no-autoloader \
    --optimize-autoloader \
    --no-interaction

# Copia todo o código da aplicação (incluindo artisan, .env, etc.)
COPY . .

# Gera o autoloader agora que todos os arquivos estão presentes
RUN COMPOSER_ALLOW_SUPERUSER=1 composer dump-autoload --optimize

# Define permissões corretas para pastas críticas do Laravel
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Expõe a porta do PHP-FPM (opcional, já que usamos artisan serve)
EXPOSE 9000

# Inicia o servidor embutido do Laravel (ideal para Render e desenvolvimento simples)
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
