#!/bin/bash

# Cast PORT to integer, default to 8000 if not set
PORT=${PORT:-8000}
PORT=$((PORT))

# Run Laravel artisan serve with casted integer port
php artisan serve --host=0.0.0.0 --port=$PORT