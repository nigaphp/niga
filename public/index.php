<?php
/**
 * This file is part of the Nigatedev PHP framework 
 * 
 * (c) Abass Ben Cheik <abass@todaysdev.com>
 */

require_once dirname(__DIR__). "/vendor/autoload.php";

use Nigatedev\Trunk;
use Nigatedev\Core\App;
use Nigatedev\Controller\HomeController;
/**
* Create a new Application from the main core application package
 *
* @var Nigatedev\Core\Application $app
*/
$app = new App(dirname(__DIR__));

/**
 * Run the app
 */
$app->trunk();