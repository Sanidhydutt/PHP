<?php
//Create Database
echo "Php Database Connection";

$servername="localhost";
$username="root";
$password="";
$database="Sani";

$conn=mysqli_connect($servername,$username,$password,$database);


if(!$conn)
{
    die("<br> Sorry We Failed to connect".mysqli_connect_error());
}
else
{
    echo "<br>Succsesfully Connceted";
}
// create table
$sql = "CREATE TABLE `Sani`.`sonu1` (`sr` INT(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR(12) NOT NULL , `dest` VARCHAR(12) NOT NULL , PRIMARY KEY (`sr`))";


// check for the table creation

$result = mysqli_query($conn,$sql);

if($result)
{
    echo("<br> table was create succsefully !<br>");
}
else
{
    echo "the table was not create succsesfully because of this error  --->".mysqli_error($conn);
}
?>