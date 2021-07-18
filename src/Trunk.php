<?php
/*
 * This file is part of the Nigatedev PHP framework core Application
 *
 * (c) Abass Ben Cheik <abass@todaysdev.com>
 */

namespace Nigatedev;

use Nigatedev\Core\App;
use Nigatedev\Diyan\Diyan;
/**
 * Trunk class
 *
 * @author Abass Ben Cheik <abass@todaysdev.com>
 *
 * @package Nigatedev
 */
class Trunk extends Diyan
{
  
    public function isApp()
    {
        if (class_exists(App::class, true)) {
            return true;
        }
        return false;
    }
 
    public function trunk()
    {
        if (!$this->isApp()) {
            return $this->errorNotFound("Fatal error: Please install Nigatedev framework using composer");
        }
        return  $this->configChecker();
    }
  
    /**
     * @var config/Config.php array $configs[]
     *
     * @return Configuration parameters
     */
    public function getConfig()
    {
        $configs = [];
        if (is_file(App::$APP_ROOT."/config/Config.php")) {
            include_once App::$APP_ROOT."/config/Config.php";
        }
        return $configs;
    }

    /**
     * Check which configuration should be used
     */
    public function configChecker()
    {
        $config = $this->getConfig();
        if($config["controllerDir"]) {
            return App::$app->run();
        } 
        return $this->errorNotFound("Fatal error: <code>src/Controller/</code> is not a directory !!!");
    }

    /**
     * Throw Exception if Nigatedev\Core\App class is not found
     */
    public function errorNotFound($error)
    {
        App::$app->response->setStatusCode(404);
        die("<h1 style='color:#ff0000;text-align:center'>$error</h1>");
    }
}