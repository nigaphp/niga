<?php

if (php_sapi_name() === 'cli') {
    require_once dirname(__DIR__)."/vendor/autoload.php";
    // Try to load environment variables from %app_root%/.env file
    if (file_exists(dirname(__DIR__)."/.env")) {
        (Dotenv\Dotenv::createImmutable(dirname(__DIR__)))->load();
    } else {
        die("ERROR: Can't load environment variables");
    }
}