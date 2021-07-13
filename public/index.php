<?php
/**
* This file is part of the Nigatedev PHP framework 
* 
* (c) Abass Ben Cheik <abass@todaysdev.com>
*/

define('APP_ROOT_DIR', dirname(__DIR__));

require_once APP_ROOT_DIR. "/vendor/autoload.php";

use Nigatedev\Application as App;

/**
* Create a new Application from the main core application package
* @var Nigatedev\Core\Application $app
*/
$app = new App();

/**
* @return render route "/" E.g: http://localhost:8000/ and output Home to the client
*/
$app->router->get("/", function() {
  return "<h1>Home</h1>";
});

/**
* @return render route "/contact" E.g: http://localhost:8000/contact and output Contact to the client
*/
$app->router->get("/contact", function() {
  return "<h1>Contact</h1>";
});

/**
* @return Run request uri / Throw HTTP Not Found Exception from Nigatedev\Core\Request
*/
$app->run();