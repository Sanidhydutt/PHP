<?php 

trait a1
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

trait b1
{
    public function byy()
    {
        echo "<br>bby";
    }
}

class A {
  
    use a1,b1;
}

$s1 = new A();

$s1->hyy();
$s1->how();
$s1->byy();



?>
