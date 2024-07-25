<?php
//Create Database
echo "Php Database Connection";

$servername="localhost";
$username="root";
$password="";

$conn=mysqli_connect($servername,$username,$password);

$sql = "CREATE DATABASE Sani";
$result = mysqli_query($conn,$sql);

if($result)
{
    echo("<br> db was create succsefully !<br>");
}
else
{
    echo "the db was not create succsesfully because of this error  --->".mysqli_error($conn);
}



?>