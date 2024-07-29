<?php 

namespace n1\v1\command;

class A
{
    public function __construct()
    {
        // echo "<br> Im From First Namespace";
        $test = new \n2\A;
    }
}

function lol()
{
    echo("<br> Function From First");
}

?>