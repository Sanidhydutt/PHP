<?php 

trait ss 
{
    public function hello()
    {
        echo "<br>Hello From Traits";
    }    
}

class A
{
    public function hello()
    {
        echo("<br> Hello From class A ");
    }
}

class B extends A
{
    use ss;
    public function hello()
    {
        echo("<br> Hello From class B ");
    }
}

$b1 = new B();

$b1->hello();

?>