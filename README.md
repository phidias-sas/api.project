# Phidias API project boilerplate

### Step 0: Add a custom composer repository
composer config repositories.REPOSITORY_NAME composer REPOSITORY_URL

### Step 1: Download some API modules
composer require phidias/calendar.api

### Step 2: Import downloaded modules into your API
Edit the file `public/index.php` and call Server::import (before Server::run)
```
Server::import("../vendor/phidias/calendar.api");
```

### Step 3: Go over your configuration settings
Look at all files inside the /configuration folder and edit as necessary

### Step 4: Run the installation script
cd path/to/your/project/public  (or wherever index.php resides)
php ../vendor/phidias/api/scripts/install.php

### ... Run!
Make the /public directory available through a web server

Quick test:
cd path/to/your/project/public
php -S localhost:8000
