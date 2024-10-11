<?php 

class A
{
    public static $name="Sanidhy";

    public static function ss() 
    {
        echo self::$name;    
    }

    public function __construct($n)
    {
        self::$name = $n;
    }

    // public function __construct()
    // {
    //     self::ss();
    // }
}

// echo A::$name;

// A::ss();

$s1 = new A("HYY");

$s1->ss();

?>
