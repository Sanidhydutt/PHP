<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
    <form action="ff.php" method="post">

        <fieldset>
            <legend>Registration</legend>

            <label for="fname">FirstName</label>
            <input type="text" name="fname" id="fname">
            <br>
            <br>

            <label for="lname">lastName</label>
            <input type="text" name="lname" id="lname">
            <br>
            <br>

            <input type="submit" value="Submit">
        </fieldset>

    </form>
</body>
</html>