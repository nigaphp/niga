<?php

declare(strict_types = 1);

use App\Trunk;
use Nigatedev\FrameworkBundle\{
    Application\App,
    Http\Request,
    Application\Configuration,
    Debugger\Debugger,
    Config\Loader
};

define("ROOT_DIR", dirname(__DIR__));
define("DSP", DIRECTORY_SEPARATOR);

$autoLoader = ROOT_DIR.DSP."vendor".DSP."autoload.php";

if (!file_exists($autoLoader)) {
    throw new RuntimeException('Please install dependencies with "composer install" to run this script.');
}

require_once($autoLoader);

if (\file_exists(ROOT_DIR.DSP.".env")) {
    (Dotenv\Dotenv::createImmutable(ROOT_DIR))->load();
    if ((bool)(new Configuration())->getEnv("DEBUG_MODE") === true) {
        Debugger::enableDebugMode();
    }
}

/** App start */
$app = new App(ROOT_DIR, (new Trunk())->globConfig());

/** App load */
$app->controllerLoader(Loader::load("loader.php"));

/** App run */
$app->run(Request::fromGlobals());
