<?php

echo "Php Database Connection";

$servername="localhost";
$username="root";
$password="";
$database="sani";

$conn=mysqli_connect($servername,$username,$password,$database);

if(!$conn)
{
    die("<br> Sorry We Failed to connect".mysqli_connect_error());
}
else
{
    echo "<br>Succsesfully Connceted";
}

$sql = "SELECT * FROM `sonu1` ";
$result= mysqli_query($conn , $sql);

//echo mysqli_num_rows($result)

$num = mysqli_num_rows($result);

echo "<br>";
echo "Record found in the database ".$num;
echo "<br>";

if($num >0)
    {
        // $row = mysqli_fetch_assoc($result);
        // echo var_dump($row);
        // echo "<br>";

        // $row = mysqli_fetch_assoc($result);
        // echo var_dump($row);
        // echo "<br>";

        // $row = mysqli_fetch_assoc($result);
        // echo var_dump($row);
        // echo "<br>";

        while($row = mysqli_fetch_assoc($result))
        {
            //echo var_dump($row);
            echo $row['sr'] . " Hello " . $row['name'] . " Welcome to " . $row['dest'];
            echo "<br>";
        }
    }




?>