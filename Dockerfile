FROM php:8.2-apache
WORKDIR /var/www/html
RUN apt-get update && apt-get install -y curl git unzip libonig-dev libxml2-dev npm && rm -rf /var/lib/apt/lists/*
RUN docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath
RUN a2enmod rewrite
RUN echo '<VirtualHost *:80>\n    ServerName localhost\n    DocumentRoot /var/www/html/public\n    <Directory /var/www/html/public>\n        AllowOverride All\n        Require all granted\n        <IfModule mod_rewrite.c>\n            RewriteEngine On\n            RewriteCond %{REQUEST_FILENAME} !-d\n            RewriteCond %{REQUEST_FILENAME} !-f\n            RewriteRule ^ index.php [QSA,L]\n        </IfModule>\n    </Directory>\n    <Directory /var/www/html>\n        AllowOverride All\n    </Directory>\n</VirtualHost>' > /etc/apache2/sites-available/000-default.conf
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
COPY . .
RUN composer install --no-interaction --optimize-autoloader
RUN npm install && npm run build
RUN chown -R www-data:www-data /var/www/html/storage
RUN chown -R www-data:www-data /var/www/html/bootstrap/cache
EXPOSE 80
CMD php artisan serve --host=0.0.0.0 --port=${PORT:-8000}