<?php

declare(strict_types=1);

use GuzzleHttp\Psr7\ServerRequest;
use Niga\Framework\{
    Application\App,
    Debugger\Debugger,
    Config\Loader
};

define("ROOT_DIR", dirname(__DIR__));
define("DSP", DIRECTORY_SEPARATOR);

$autoLoader = ROOT_DIR . DSP . "vendor" . DSP . "autoload.php";

if (!file_exists($autoLoader)) {
    throw new RuntimeException('Please install dependencies with "composer install" to run this script.');
}

require_once($autoLoader);

if (\file_exists(ROOT_DIR . DSP . ".env")) {
    (Dotenv\Dotenv::createImmutable(ROOT_DIR))->load();
    if ((bool)$_ENV["DEBUG_MODE"]) {
        Debugger::enableDebugMode();
    }
}

/** App start */
$app = new App(ServerRequest::fromGlobals(), ROOT_DIR);

/** App load */
$app->loader(Loader::load());

/** App run */
$app->run();
