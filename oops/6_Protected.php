<?php 

class emp
{
    public $name;
    public $lang;
    public $salary;

    public function __construct($name,$salary) 
    {
        $this->name = $name;
        // $this->lang = $lang;
        $this->salary = $salary;    
    }

    protected function describe() 
    {
        echo("<br> Name of the programer $this->name");
        // echo("<br> Language $this->lang");
        echo("<br> Salaray of programer $this->salary");
    }
}

class pro extends emp
{
    public $lang = "php";


    public function __construct($name,$lang,$salary)
    {
     
        $this->name = $name;
        $this->lang = $lang;
        $this->salary= $salary;
        $this->describe();
        echo("<br>$this->lang");
    }
}

$s1 = new emp("sonu",3);
$s2 = new pro("Sanidhy","PHP",30000);



?>