<?php
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$mobile = $_POST['mobile'];
$city = $_POST['city'];
$subject = $_POST['subject'];

// Create connection
$conn = mysqli_connect("localhost", "root", "", "hotel");

$sql = "INSERT INTO `register`(`fname`, `lname`, `mobile`, `city`, `subject`) VALUES ('$fname','$lname','$mobile','$city','$subject')";
$conn->query($sql);
/*
if ( === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}*/

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width>, initial-scale=1.0">
   
    <title>ROYAL TAJ</title>
    <link rel="stylesheet" href="Style2.css">

</head>
<body>

    <header>
        <div class="content flex_space">    
            <div>
                <p style="font-size: xx-large;font-weight: 1000px;color: blue;">ROYAL TAJ</p>  
            </div>
            
            <div class="navlinks">
                <ul id="menulist">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="aus.html">About</a></li>
                    <li><a href="Contact.php">Contact</a></li>
                    <li><button class="primary-btn">BOOK NOW</button> </li>
                </ul>
            </div>
            
        </div>
        
        
       
    </header>
  
</div> 
 <div style="display: flex;">
<div>
    <img src="Image/HM1.jpg" style="width: 800px; height: 100%;">
  
</div>
<div class="container">
    <form method="post" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <label for="fname">First Name</label>
      <input type="text" id="fname" name="firstname" placeholder="Your name.." required>

  
      <label for="lname">Last Name</label>
      <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>

      <label>Enter Your Mobile Number</label>
      <input type="text" id="phone" name="mobile" placeholder="Enter Mobile Number" pattern="[0-9]{10}" maxlength="10" required>
      
      <label for="city" name="city">Select your City :</label>
 <select name="city" id="city" required>
    <option value="">None</option>
  <optgroup label="North India">
      <option value="Delhi">Delhi</option>
      <option value="Mumbai">Mumbai</option>
      <option value="Kolkata">Kolkata</option>
  </optgroup>
  <optgroup label="West India">
      <option value="Goa">Goa</option>
      <option value="Pune">Pune</option>
      <option value="Jaipur">Jaipur</option>
  </optgroup>
  <optgroup label="South India">
      <option value="Bangalore">Bangalore</option>
      <option value="Hyderabad">Hyderabad</option>
      <option value="Chennai">Chennai</option>
  </optgroup>
  <optgroup label="East India">
      <option value="Kolkata">Kolkata</option>
      <option value="Patna">Patna</option>
      <option value="Varanasi">Varanasi</option>
  </optgroup>
</select>
  
      <label for="subject">Subject</label>
      <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
  
      <input type="submit" value="submit" name="submit">
    </form>
  </div>
  
</body>
</html>
