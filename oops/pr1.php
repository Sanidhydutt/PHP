<?php

if($_SERVER['REQUEST_METHOD'] == 'POST')
{

$fname=$_POST['fname'];
$lname=$_POST['lname'];

$servername="localhost";
$username="root";
$password="";
$dbname="lol";

$conn=mysqli_connect($servername,$username,$password,$dbname);

// if(!$conn)
// {
//     die("<br> sorry cannot connect ot the server".mysqli_connect_error());
// }
// else
// {
//     echo "<br> Connect sussesfully";
// }

$sql = "INSERT INTO `reg` (`fname`,`lname`) VALUES ('$fname', '$lname')";

$result= mysqli_query($conn,$sql);

// if($result)
// {
//     echo("<br> the record has been inserted succsefully !<br>");
// }
// else
// {
//     echo "the reocrd was not inserted succsesfully because of this error  --->".mysqli_error($conn);
// }

}
?>