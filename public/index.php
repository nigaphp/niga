<?php
/*
 * This file is part of the Nigatedev PHP framework package
 *
 * (c) Abass Ben Cheik <abass@todaysdev.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

use App\Trunk;
use Nigatedev\FrameworkBundle\ {
Application\App,
Debugger\Debugger,
Config\Loader
};

use Nigatedev\Framework\Support\File;

define("ROOT_DIR", dirname(__DIR__));

require_once ROOT_DIR."/vendor/autoload.php";

if (File::isFile(ROOT_DIR."/.env")) {
    (Dotenv\Dotenv::createImmutable(ROOT_DIR))->load();
 
    if (isset($_ENV["DEBUG_MODE"]) && (bool)$_ENV["DEBUG_MODE"] === true) {
        Debugger::enableDebugMode();
    }
}
/** App start */
$app = new App(ROOT_DIR, (new Trunk())->globConfig());

/** App load */
$app->router->load(Loader::load("loader.php"));

/** App run */
$app->run();
