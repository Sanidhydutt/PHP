<?php 

class A
{
    public function __construct()
    {
        echo("<br> Hello You just create an obj thats why im called here");
    }

    public function ss()
    {
        echo("<br>Hello It's Normal Function you need obj for calling me");
    }

    public function __destruct()
    {
        echo("<br>hahaha I'll destroy you all more obj more create more destruct by me");
    }
}

$a1 = new A();
$a2 = new A();

$a1->ss();
$a2->ss();
$a1->ss();


?>