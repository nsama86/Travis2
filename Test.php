<?php

/**
 * Created by PhpStorm.
 * User: janeh
 * Date: 4/9/2017
 * Time: 12:02 PM
 */

namespace TDD\Test;
require dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR .'autoload.php';

use PHPUnit\Framework\TestCase;
use TDD\RandomFunctionsToTest;

class Test extends RandomFunctionsToTest
{
  
  public function testOne(){
    
    $this->assertEquals(1+1,2);
  }

  public function testTruth(){

    $this->assertTrue(true);
  }

  public function testTwo(){
    $tester = new RandomFunctionsToTest();
    $name = "Josh";
    $tester->sayMyName($name);

    $this->assertEquals("This is my name: Josh", $tester, "Expecting Josh as name plus additional string text");


  }

}