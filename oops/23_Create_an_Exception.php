<?php
class MyException extends Exception
{
    function errormsg() 
    {
        $eror = "My Exception Message". $this->getMessage()."<br> Error on line number . :".$this->getLine();
        
        return $eror; 
    }
}
function lol($n)
{
try
{
    if ($n<=0) 
    {
        throw new Exception("<br>Enter the valid number");
    }
    if ($n<=3) 
    {
        throw new MyException("<br>Number 3 is invalid");
    }
    $d=2/$n;
    echo("<br>".$d);
}
    catch(MyException $e)
    {
        echo $e->errormsg();
        // echo $e->getMessage();
    }        
    finally
    {
        echo("<br>I'm Always got a print");
    }
}


 lol(3);
// lol(10);

?>