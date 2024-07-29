<?php 

require '16_First_namespace.php';
require '17_Second_namespace.php';

$obj = new n2\A();

// $obj2 = new n2\A();

function lol()
{
    echo "<br>lol function from main";
}

use n1\v1\command as cmd;

cmd\lol();

?>