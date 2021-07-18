<?php
/**
 * This file is part of the Nigatedev PHP framework package
 * 
 * (c) Abass Ben Cheik <abass@todaysdev.com>
 */
 
namespace Nigatedev\Controller;

require_once dirname(__DIR__). "/vendor/autoload.php";

use Nigatedev\Trunk;
use Nigatedev\Core\App;
use Nigatedev\Maker\Make;

var_dump(new Make());
/**
 * We recommend using the command line interface to generate route / controller
 * E.g: this command [bin/controller make:controller HomeController] 
 * will generate you a valid route that point to [/home] route and a controller class into src/Controller directory
 */
$app = new App(dirname(__DIR__));

/**
 * Run the app
 */
$app->trunk();
