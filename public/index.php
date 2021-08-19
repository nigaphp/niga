<?php
declare(strict_types=1);

/**
 * This file is part of the Nigatedev PHP framework package
 *
 * (c) Abass Ben Cheik <abass@todaysdev.com>
 */

use App\Trunk;
use Nigatedev\App;
use Nigatedev\Debugger\Debugger;
use Nigatedev\Support\File;

define("ROOT_DIR", realpath(dirname(__DIR__)));

require_once ROOT_DIR."/vendor/autoload.php";

if (File::isFile(ROOT_DIR."/.env")) {

 (Dotenv\Dotenv::createImmutable(ROOT_DIR))->load();
 
 if(isset($_ENV["DEBUG_MODE"]) && (bool)$_ENV["DEBUG_MODE"] === true){
    Debugger::enableDebugMode();
 }
}

/** App start */
$app = new App(ROOT_DIR, (new Trunk())->globals());

/** App load */
$app->router->load(ROOT_DIR."/config/loader.php");

/** App run */
$app->run();
