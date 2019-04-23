<?php

use bowling\Kata;

class KataTest extends PHPUnit_Framework_TestCase
{

  public function testInit()
  {
    $kata = new Kata();
    self::assertTrue(true);
  }

}
