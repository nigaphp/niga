<?php
namespace App;

use Nigatedev\Config\Configurator;

class Trunk extends Configurator {
  
  /**
   * Constructor 
   */
  public function __construct()
  {
    parent::__construct(dirname(__DIR__));
    
    /** Default controllers directory */
    $this->setControllerDir("/src/Controller");
    
    /** Default views directory */
    $this->setViewsDir("/views");
  }
  
  
  /* Uncomment this function to overwrite default database configuration
   
   public function globals()
    {
      return  [
        "db" => [
              "dsn"      => $_ENV["DSN"] ?? "",
              "user"     => $_ENV["DB_USER"] ?? "",
              "password" => $_ENV["DB_PASSWORD"] ?? ""
            ]
       ];
    }
  */ 
}