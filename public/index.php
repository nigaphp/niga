<?php

require_once "../vendor/autoload.php";

use Nigatedev\Application;

$app = new Application();

$app->router->get("/", function(){
  
  return "<h1>Home</h1>";
});

$app->run();