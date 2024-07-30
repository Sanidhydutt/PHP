<?php
$showAlret = false;
$showerrors = false;

if($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'partials/db_conn.php';

    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    //$exists = false;

    $existSql = "SELECT * FROM `users` WHERE username = '$username';";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);

    if($numExistRows > 0) {
        // $exists = true;
        $showerrors = "Username Already Exists";
    } else {
        //$exists = false;
        if(($password == $cpassword)) {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` (`username`, `password`, `dt`) VALUES ('$username', '$hash', current_timestamp());";
            $result = mysqli_query($conn, $sql);
            
            if($result) {
                $showAlret = true;
            }
        } else {
            $showerrors = "Password Does Not Match";
        }
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
    if($showAlret) {
        echo('<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success</strong> Your Account is now created and you can login now
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>');
    }
    if($showerrors) {
        echo('<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error</strong> '.$showerrors.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>');
    }
    ?>
    <div class="container">
        <h1 class="text-center">Signup to our Website</h1>
        <form action="signup.php" method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" maxlength="11" class="form-control" id="username" name="username" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" maxlength="23" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3">
                <label for="cpassword" class="form-label">Confirm Password</label>
                <div id="emailHelp" class="form-text">Make sure to type the same password</div>
                <input type="password" class="form-control" id="cpassword" name="cpassword">
            </div>
            <button type="submit" class="btn btn-primary">Signup</button>
        </form>
    </div>
</body>
</html>
