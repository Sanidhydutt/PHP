<?php
//Create Database
echo "Php Database Connection";

$servername="localhost";
$username="root";
$password="";
$database="Sani";

$conn = mysqli_connect($servername,$username,$password,$database);


if(!$conn)
{
    die("<br> Sorry We Failed to connect".mysqli_connect_error());
}
else
{
    echo "<br>Succsesfully Connceted";
}

// check for the table creation
/*
if want add variables
$name = sanu;
$desti= aqrium;
$sql = "INSERT INTO `sonu1` (`name`, `dest`) VALUES ('$name', '$desti')";
*/
$sql = "INSERT INTO `sonu1` (`name`, `dest`) VALUES ('Tom', 'Germany')";

$result = mysqli_query($conn,$sql);

if($result)
{
    echo("<br> the record has been inserted succsefully !<br>");
}
else
{
    echo "the reocrd was not inserted succsesfully because of this error  --->".mysqli_error($conn);
}

?>