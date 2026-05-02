FROM php:8.2-cli

WORKDIR /var/www/html

# Install dependencies
RUN apt-get update && apt-get install -y \
    curl \
    git \
    unzip \
    libonig-dev \
    libxml2-dev \
    npm && \
    rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath

# Copy Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy application files
COPY . .

# Copy start script
COPY start.sh /usr/local/bin/start.sh
RUN chmod +x /usr/local/bin/start.sh

# Install PHP dependencies
RUN composer install --no-interaction --optimize-autoloader

# Install Node dependencies and build
RUN npm install && npm run build

# Set permissions
RUN chown -R nobody:nogroup /var/www/html/storage
RUN chown -R nobody:nogroup /var/www/html/bootstrap/cache

EXPOSE 8000

CMD ["/usr/local/bin/start.sh"]