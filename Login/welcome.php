<?php 

session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!= true)
{
    header("location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome - <?php 
    echo $_SESSION['username']; ?></title>
</head>
<body>
    <?php require 'partials/_nav.php' ?>
   
    <div class="container">
    <div class="alert alert-success" role="alert">
  <h4 class="alert-heading"> Welcome - <?php echo $_SESSION['username']; ?></h4>
  <p>Hey How Are You doing ? Welcome To iSecure. You Are Logged In as  welcome - <?php echo $_SESSION['username']; ?>
</p>
  <hr>
  <p class="mb-0">Whenever you need to, be sure to Logout<a href="/Login/logout.php"> using this link</a></p>
</div>
    </div>
</body>
</html>