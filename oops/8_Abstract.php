<?php 

abstract class LOL
{
    public $name;

    abstract protected function Sani($a,$b);
}

class SS extends LOL
{
    public function Sani($a,$b)
    {
        return $a+$b;
    }
}

$s1 = new SS();

echo $s1->Sani(10,20);
?>