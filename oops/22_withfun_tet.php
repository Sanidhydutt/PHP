<?php

function lol($n)
{
try
{
    if ($n<=0) 
    {
        throw new Exception("<br>Enter the valid number");
    }
    $d=2/$n;
    echo("<br>".$d);
}
    catch(Exception $e)
    {
        echo $e->getMessage();
        // echo $e->getLine();
        // echo $e->getFile();
    }        
    finally
    {
        echo("<br>I'm Always got a print");
    }
}

lol(2);
lol(0);
lol(4);

?>