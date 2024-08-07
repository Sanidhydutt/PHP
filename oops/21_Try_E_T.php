<?php


$n=0;

try
{
    if ($n<=0) 
    {
        throw new Exception("Enter the valid number");
    }
    $d=2/$n;
    echo("<br>".$d);
}
catch(Exception $e)
{
    echo $e->getMessage();
}

?>