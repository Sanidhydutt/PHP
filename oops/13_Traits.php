<?php 

trait hyy
{
    public function hyy()
    {
        echo "<br>hyy";
    }
    public function how() 
    {
        echo("<br>How Are You ");    
    }
}

trait byy
{
    public function byy()
    {
        echo "<br>bby";
    }
}

class A {
  
    use hyy,byy;
}

$s1 = new A();

$s1->hyy();
$s1->how();
$s1->byy();



?>