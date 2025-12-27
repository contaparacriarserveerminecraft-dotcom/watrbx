# Usa imagem oficial do PHP 8.1 com CLI
FROM php:8.1-cli

# Instala pacotes necessários
RUN apt-get update && apt-get install -y \
    unzip \
    git \
    libxml2-dev \
    libonig-dev \
    libzip-dev \
    && docker-php-ext-install dom mbstring soap

# Instala Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Define diretório de trabalho
WORKDIR /app

# Copia o código para dentro do container
COPY . .

# Instala dependências do composer
RUN composer install --no-dev --optimize-autoloader

# Define porta que o Render usa
ENV PORT=10000

# Comando para iniciar o servidor PHP embutido
CMD php -S 0.0.0.0:$PORT -t src
