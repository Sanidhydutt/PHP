<?php 

class A
 {
    protected static $name="Sanidhy";

    public function show()
    {
        echo static::$name;
        echo self::$name;    
    }
 }

 class B extends A
 {
    protected static $name="Dutt";
 }

 $b1 = new B();

 $b1->show();

?>