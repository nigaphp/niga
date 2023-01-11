<?php

namespace App;

use Niga\Framework\Config\Configurator;

class Trunk extends Configurator
{

  /**
   * Constructor
   */
  public function construct()
  {
    parent::__construct(dirname(__DIR__));

    /** Default controllers directory */
    $this->setControllerDir("/src/Controller");

    /** Default views directory */
    $this->setViewsDir("/views");
  }
}
