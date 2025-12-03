#!/bin/sh

# Start npm dev server in background if package.json exists
if [ -f package.json ]; then
    npm run dev &
fi

# Start Laravel server
php artisan serve --host=0.0.0.0 --port=8000
