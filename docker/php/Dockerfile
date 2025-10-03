# docker/php/Dockerfile
FROM php:8.3-fpm

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
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Diretório de trabalho
WORKDIR /var/www/html

# 👇 COPIAR TODOS OS ARQUIVOS NECESSÁRIOS ANTES DO COMPOSER INSTALL
# Isso inclui: artisan, bootstrap/, config/, .env (opcional), etc.
COPY artisan .
COPY bootstrap/ bootstrap/
COPY config/ config/
COPY database/ database/
COPY public/ public/
COPY resources/ resources/
COPY routes/ routes/
COPY composer.json composer.lock ./

# 👇 Criar pastas de escrita (obrigatório para o artisan funcionar)
RUN mkdir -p \
    storage/framework/cache \
    storage/framework/sessions \
    storage/framework/views \
    storage/logs \
    bootstrap/cache

# 👇 Agora sim, instalar dependências
RUN composer install --optimize-autoloader --no-dev --no-interaction

# 👇 Copiar o RESTO (caso algo tenha sido esquecido, ou para atualizar)
COPY . .

# Permissões
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage \
    && chmod -R 755 /var/www/html/bootstrap/cache

EXPOSE 9000

CMD ["php-fpm"]
