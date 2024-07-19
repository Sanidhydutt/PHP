<?php 

interface A
{
    function s1($a,$b);
}

interface B
{
    function s2($c,$d);
}

class C implements A,B
{
    public function s1($a,$b) 
    {
        echo("<br>".$a+$b);    
    }

    public function s2($c,$d) 
    {
        echo("<br>".$c-$d);    
    }
}

$ss= new C();

$ss->s2(10,20);

?>