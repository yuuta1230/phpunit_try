<?php

require_once __DIR__."/MyClass.php";

class Calc
{
    public function plus($a, $b)
    {
        return $a + $b;
    }

    public function user(MyClass $myClass, $a)
    {
        return $myClass->myMethod($a);
    }
}
