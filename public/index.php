<?php

declare(strict_types = 1);

use App\Trunk;
use Nigatedev\FrameworkBundle\Application\App;
use Nigatedev\FrameworkBundle\Debugger\Debugger;
use Nigatedev\FrameworkBundle\Config\Loader;

use Nigatedev\Framework\Support\File;

define("ROOT_DIR", dirname(__DIR__));
define("DSP", DIRECTORY_SEPARATOR);

$autoLoader = ROOT_DIR.DSP."vendor".DSP."autoload.php";

if (!file_exists($autoLoader)) {
    throw new RuntimeException('Install dependencies with "composer install" to run this script.');
}

require_once($autoLoader);

if (File::isFile(ROOT_DIR.DSP.".env")) {
    (Dotenv\Dotenv::createImmutable(ROOT_DIR))->load();
 
    if (isset($_ENV["DEBUG_MODE"]) && (bool)$_ENV["DEBUG_MODE"] === true) {
        Debugger::enableDebugMode();
    }
}

/** App start */
$app = new App(ROOT_DIR, (new Trunk())->globConfig());

/** App load */
$app->controllerLoader(Loader::load("loader.php"));

/** App run */
$app->run();
