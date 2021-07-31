<?php
/**
 * This file is part of the Nigatedev PHP framework package
 *
 * (c) Abass Ben Cheik <abass@todaysdev.com>
 */

require_once dirname(__DIR__)."/vendor/autoload.php";

$app = new Nigatedev\Core\App(dirname(__DIR__));
$app->router->load(dirname(__DIR__)."/config/loader.php");
$app->run();
