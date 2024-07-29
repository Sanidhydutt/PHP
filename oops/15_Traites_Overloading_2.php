<?php 
trait hell
{
    public function hello()
    {
        echo("<br> Hello From Hello Trait");
    }
}

trait hyy
{
    public function hello()
    {
        echo("<br> Hello From Hyy Trait");
    }
}

class A
{
    use hell,hyy
    // {
    //     hell::hello insteadOf hyy;
    // }
    {
        hyy::hello insteadOf hell;
        hell::hello as newhell;
    }
}
$a1 = new A();

$a1->hello();

$a1->newhell();
?>