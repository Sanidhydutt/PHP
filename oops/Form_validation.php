<!DOCTYPE HTML>  
<html>
<head>
<style>
body {
  font-family: Arial, sans-serif;
  background-color: #f9f9f9;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.container {
  background-color: #ffffff;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  width: 100%;
  max-width: 400px;
}

.error {
  color: #FF0000;
}

h2 {
  text-align: center;
  color: #333333;
}

form {
  display: flex;
  flex-direction: column;
}

label {
  margin-bottom: 5px;
  color: #333333;
}

input[type="text"],
input[type="email"],
input[type="submit"],
input[type="radio"] {
  margin-bottom: 15px;
}

input[type="text"],
input[type="email"] {
  width: 100%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 15px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
  background-color: #45a049;
}

input[type="radio"] {
  margin-right: 5px;
}

.error-message {
  margin-top: -10px;
  margin-bottom: 15px;
}

.input-group {
  margin-bottom: 20px;
}
</style>
</head>
<body>  
<div class="container">
<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = "";
$name = $email = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["name"]))
   {
    $nameErr = "Name is required";
  }
   else 
   {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name))
     {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"]))
  {
    $emailErr = "Email is required";
  } 
  else 
  {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
     {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["gender"]))
   {
    $genderErr = "Gender is required";
  } 
  else 
  {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">   
  <div class="input-group">
    <label for="name">Name:</label>
    <input type="text" name="name" value="<?php echo $name;?>">
    <span class="error error-message">* <?php echo $nameErr;?></span>
  </div>
  
  <div class="input-group">
    <label for="email">E-mail:</label>
    <input type="text" name="email" value="<?php echo $email;?>">
    <span class="error error-message">* <?php echo $emailErr;?></span>
  </div>
  
  <div class="input-group">
    <label for="gender">Gender:</label>
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
    <span class="error error-message">* <?php echo $genderErr;?></span>
  </div>
  
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
if (!empty($name) || !empty($email) || !empty($gender)) {
  echo "<h2>Your Input:</h2>";
  echo $name;
  echo "<br>";
  echo $email;
  echo "<br>";
  echo $gender;
}
?>
</div>
</body>
</html>
