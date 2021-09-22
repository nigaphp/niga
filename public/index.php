<?php 

declare(strict_types = 1);

/*
 * This file is part of the Nigatedev PHP framework package
 *
 * (c) Abass Ben Cheik <abass@todaysdev.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use App\Trunk;
use Nigatedev\FrameworkBundle\Application\App;
use Nigatedev\FrameworkBundle\Debugger\Debugger;
use Nigatedev\FrameworkBundle\Config\Loader;

use Nigatedev\Framework\Support\File;

define("ROOT_DIR", dirname(__DIR__));

$autoLoader = ROOT_DIR."/vendor/autoload.php";

if (!file_exists($autoLoader)) {
    throw new RuntimeException('Install dependencies with "composer install" to run this script.');
}

require_once($autoLoader);

if (File::isFile(ROOT_DIR."/.env")) {
    (Dotenv\Dotenv::createImmutable(ROOT_DIR))->load();
 
    if (isset($_ENV["DEBUG_MODE"]) && (bool)$_ENV["DEBUG_MODE"] === true) {
        Debugger::enableDebugMode();
    }
}

/** App start */
$app = new App(ROOT_DIR, (new Trunk())->globConfig());

/** App load */
$app->controllerRegister(Loader::load("loader.php"));

/** App run */
$app->run();
