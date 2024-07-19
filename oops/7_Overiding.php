<?php 

class base
{
    public $name = "Parent Class";

    public function su($a,$b) 
    {
        echo("<br>".$a+$b);
    }
}

class der extends base
{
    public $name = "Child Class";

    public function su($a,$b) 
    {
        echo("<br>".$a*$b);
    }
}

$s1 = new base();

echo $s1->name;
$s1->su(10,20);
?>