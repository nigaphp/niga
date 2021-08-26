<?php
  define("ROOT_DIR", dirname(__DIR__));

if (!file_exists(ROOT_DIR."/vendor/autoload.php")) {
  die("Fatal: missing auto loader, try to fix that with 'composer update' or 'composer install'");
}
require_once ROOT_DIR."/vendor/autoload.php";

 (Dotenv\Dotenv::createImmutable(ROOT_DIR))->load();
 