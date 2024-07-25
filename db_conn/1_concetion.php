<?php

echo "Php Database Connection";

$servername="localhost";
$username="root";
$password="";

$conn=mysqli_connect($servername,$username,$password);

if(!$conn)
{
    die("<br> Sorry We Failed to connect".mysqli_connect_error());
}
else
{
    echo "<br>Succsesfully Connceted";
}
?>