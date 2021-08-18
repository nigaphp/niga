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

require_once dirname(__DIR__)."/vendor/autoload.php";

if (File::isFile(dirname(__DIR__)."/.env")) {

 (Dotenv\Dotenv::createImmutable(dirname(__DIR__)))->load();
 
 if(isset($_ENV["DEBUG_MODE"]) && (bool)$_ENV["DEBUG_MODE"] === true){
    Debugger::enableDebugMode();
 }
}

/** App start */
$app = new App(dirname(__DIR__), (new Trunk())->globals());

/** App load */
$app->router->load(App::$APP_ROOT."/config/loader.php");

/** App run */
$app->run();
