<?php

$login = false;
$showerrors = false;
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    include 'partials/db_conn.php';

    $username = $_POST["username"];
    $password = $_POST["password"];

    //$sql = "SELECT * from users where username = '$username' AND password = '$password'";
    $sql = "SELECT * from users where username = '$username'";
    $result = mysqli_query($conn,$sql);
    $num = mysqli_num_rows($result);    
        if($num == 1)
        {

            while($row = mysqli_fetch_assoc($result))
            {
                if(password_verify($password,$row['password']))
                {
                    $login = true;    
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['username'] = $username;
                    header("Location: welcome.php");
                    exit();
                }
                
                else
                {
                    $showerrors = "Invalid Credentials";
                }
            }
        }
    
    else
        {
            $showerrors = "Invalid Credentials";
        }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require 'partials/_nav.php' ?>
    <?php 
    if($login)
    {
        echo('<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success</strong> Your Logged in
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>');}
    if($showerrors)
    {
        echo('<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error</strong> '.$showerrors.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>');}
    
         ?>
    <div class="container">
        <h1 class="text-center">Login to our Website</h1>
    <form action="login.php" method="post">
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  
  <button type="submit" class="btn btn-primary">Login</button>
</form>
    </div>
</body>
</html>