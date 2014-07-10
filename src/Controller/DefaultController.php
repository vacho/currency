<?php

namespace Drupal\currency\Controller;

use Drupal\Core\Controller\ControllerBase;

class DefaultController extends ControllerBase 
{

  /**
   * hello
   * @return string
   */
  public function hello($name)
  {
    return "Hello ".$name." !";
  }
}
