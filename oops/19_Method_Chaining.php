<?php 

class abc
{
    public function fir() 
    {
        echo("<br> I'm First Function ");    
        return $this;
    }
    public function Sec() 
    {
        echo("<br> I'm Second Function ");    
        return $this;
    }
    public function third() 
    {
        echo("<br> I'm Third Function ");    
    }
    
}

$s1 = new abc();

$s1->fir()->sec()->third();

?>