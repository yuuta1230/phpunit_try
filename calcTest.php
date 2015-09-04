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

    /**
     * http://www.aventinesolutions.nl/mediawiki2/index.php/PHPUnit:_How_to_Mock_Multiple_Calls_to_the_Same_Method
     * @covers Calc::user
     */
    public function testUser()
    {
        $myClass = $this->getMockBuilder("MyClass")
            ->getMock();

        $map = array(
            array(1,1),
            array(2,2)
        );

        $myClass->expects($this->any())
                ->method("myMethod")
                ->will($this->returnValueMap($map));

        $calc = new Calc();
        $this->assertEquals(1, $calc->user($myClass, 1)); 
        $this->assertEquals(2, $calc->user($myClass, 2)); 
    }
}
