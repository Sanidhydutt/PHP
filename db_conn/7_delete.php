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

// $sql = "SELECT * FROM `sonu1` WHERE `dest` = 'Germany'";


// $result= mysqli_query($conn , $sql);

// //echo mysqli_num_rows($result)

// $num = mysqli_num_rows($result);

// echo "<br>";
// echo "Record found in the database ".$num;
// echo "<br>";
// $no=1;
// if($num >0)
//     {
//         while($row = mysqli_fetch_assoc($result))
//         {
//             //echo var_dump($row);
//             echo $no . " Hello " . $row['name'] . " Welcome to " . $row['dest'];
//             echo "<br>";
//             $no++;
//         }
//     }

    $sql = "DELETE FROM `sonu1` WHERE `sonu1`.`dest` = 'Germany'";
    //use old program insert same qury then use limit function to delete query limited
    // also use limit like select * from limit 3 got only 3 record
    $result= mysqli_query($conn , $sql);

    $aff = mysqli_affected_rows($conn);
    echo "<br> num of Record affected ".$aff;

    if($result)

    {
        echo "<br> Record deleted in the database ";
    }

    else
    {
        $err = mysqli_error($conn); 
        echo "<br> we could not delete record successfully";
    }


?>