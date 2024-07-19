<?php 
// class emp
// {
//     private $name = "Sanidhy";
   
//    public function ss()
//     {
//     echo "$this->name";
//     }
// }
// $s1 = new emp();

// echo $s1->name;


    // Access modifiers in Php
    // 1. Public - can be accessed from anywhere
    // 2. Private - can only be accessed from within the class
    // 3. Protected - can be accessed from withing the class and from derived class

    // By default the properties and methods are treated as public
    // Private properties and methods can only be accessed by other member functions of the class

    
    class Emp 
    {

        private $name = "harry";

        function showName(){
            echo "$this->name";
        }
    }

    $harry = new Emp ();
    // echo $harry->name; -> This will not work if harry is private
    $harry->showName();


 ?>