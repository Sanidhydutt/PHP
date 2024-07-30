<?php 

$servername = "localhost";
$username = "root";
$password= "";
$database = "users";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn)
{
    echo("Error".mysqli_connect_error()); 
}
else
{
    // echo("<br>connected");
}


?>