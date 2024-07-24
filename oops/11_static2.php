<?php 

class A
{
    public static $name="Sanidhy";
}

class B extends A
{
    public static function ss()
    {
        echo B::$name;
    }
}

// echo A::$name;

// A::ss();

// $s1 = new A("WTF");

// $s1->ss();

$s1 = new B();

$s1->ss();

?>