<?php

/**
 * Created by PhpStorm.
 * User: janeh
 * Date: 4/9/2017
 * Time: 12:51 PM
 */

namespace TDD;
class RandomFunctionsToTest
{

  public function __construct()
  {
    //does nothing.
  }

  public function sayMyName($name){

    $nameHolder = "This is my name: " . $name;

    return $nameHolder;
  }

}