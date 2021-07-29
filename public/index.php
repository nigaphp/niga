<?php
/**
 * This file is part of the Nigatedev PHP framework package
 *
 * (c) Abass Ben Cheik <abass@todaysdev.com>
 */

define('APP_ROOT', dirname(__DIR__));

require_once APP_ROOT. "/vendor/autoload.php";

use Nigatedev\Core\App;

$app = new App(APP_ROOT);

$app->router->load(APP_ROOT."/config/loader.php");
    
$app->run();
