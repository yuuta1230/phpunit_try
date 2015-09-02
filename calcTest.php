<?php

require_once __DIR__."/calc.php";

class CalcTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers Calc::plus
     */
    public function testPlus()
    {
        $calc = new Calc();
        $this->assertEquals(2, $calc->plus(1, 1)); 
    }
}
