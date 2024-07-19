<?php
$name = $_POST['name']; 
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$quries = $_POST['quries'];

$conn = mysqli_connect("localhost", "root", "", "hotel");

$sql = "INSERT INTO `contact`(`name`,`mobile`, `email`, `quries`) VALUES ('$name','$mobile','$email','$quries')";
$conn->query($sql);
if ($conn->query($sql) === TRUE) 
 {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROYAL TAJ</title>
    <link rel="stylesheet" href="Style2.css">
    <style>
        /* Google Font CDN Link */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

.container{
  box-sizing: border-box;
  font-family: "Poppins" , sans-serif;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  display: flex;
  width: 85%;
  background: #696969;
  opacity: 1;
  border-radius: 6px;
  padding: 20px 60px 30px 40px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  margin-top: 20px;
}
.container .con{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.container .con .left-side{
  width: 25%;
  height: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  margin-top: 15px;
  position: relative;
}
.con .left-side::before{
  content: '';
  position: absolute;
  height: 70%;
  width: 2px;
  right: -15px;
  top: 50%;
  transform: translateY(-50%);
  background: #afafb6;
}
.con .left-side .details{
  margin: 14px;
  text-align: center;
}
.con .left-side .details i{
  font-size: 30px;
  color: #3e2093;
  margin-bottom: 10px;
}
.con .left-side .details .topic{
  font-size: 18px;
  font-weight: 500;
}
.con .left-side .details .text-one,
.con .left-side .details .text-two{
  font-size: 14px;
  color: #afafb6;
}
.container .con .right-side{
  width: 75%;
  margin-left: 75px;
}
.con .right-side .topic-text{
  font-size: 23px;
  font-weight: 600;
  color: #3e2093;
}
.right-side .input-box{
  height: 50px;
  width: 100%;
  margin: 12px 0;
}
.right-side .input-box input,
.right-side .input-box textarea{
  height: 100%;
  width: 100%;
  border: none;
  outline: none;
  font-size: 16px;
  background: #F0F1F8;
  border-radius: 6px;
  padding: 0 15px;
  resize: none;
}
.right-side .message-box{
  min-height: 110px;
}
.right-side .input-box textarea{
  padding-top: 6px;
}
.right-side .button{
  display: inline-block;
  margin-top: 12px;
}
.right-side .button input[type="button"]{
  color: #fff;
  font-size: 18px;
  outline: none;
  border: none;
  padding: 8px 16px;
  border-radius: 6px;
  background: #3e2093;
  cursor: pointer;
  transition: all 0.3s ease;
}
.button input[type="button"]:hover{
  background: #5029bc;
}

@media (max-width: 950px) {
  .container{
    width: 90%;
    padding: 30px 40px 40px 35px ;
  }
  .container .con .right-side{
   width: 75%;
   margin-left: 55px;
}
}
@media (max-width: 820px) {
  .container{
    margin: 40px 0;
    height: 100%;
  }
  .container .con{
    flex-direction: column-reverse;
  }
 .container .con .left-side{
   width: 100%;
   flex-direction: row;
   margin-top: 40px;
   justify-content: center;
   flex-wrap: wrap;
 }
 .container .con .left-side::before{
   display: none;
 }
 .container .con .right-side{
   width: 100%;
   margin-left: 0;
 }
}
.ss
{
  display: flex;
  position: absolute;
  margin: 23vh 40vw;
  top: -26vh;
}
.logo{
    font-size: xx-large;
    font-weight: 1000;
    color: blue;
    display: flex;
    
}
.navlinks{
    display: flex;
}
#menulist{
    display: flex; 
    justify-content: right;
    align-items: right;
    margin: 0 11vw;
    gap: 2vw;
}
    </style>
</head>
<body style="background-color: rgb(255, 255, 255);">
    
  <header>
    <div class="content flex_space">    
        <div>
            <p style="font-size: xx-large;font-weight: 1000px;color: blue;">ROYAL TAJ</p>  
        </div>
        
        <div class="navlinks" style="margin-left: 360px;">
            <ul id="menulist" >
                <li><a href="index.php">Home</a></li>
                <li><a href="aboutus.html">About</a></li>
                <li><a href="Contact.php">Contact</a></li>

                <li><button class="primary-btn">BOOK NOW</button> </li>
            </ul>
        </div>
        
    </div>
</header>
    
    <div class="container">
        <div class="con">
          <div class="left-side">
            <div class="address details">
              <i class="fas fa-map-marker-alt"></i>
              <div class="topic">Address</div>
              <div class="text-one">Surkhet, NP12</div>
              <div class="text-two">Birendranagar 06</div>
            </div>
            <div class="phone details">
              <i class="fas fa-phone-alt"></i>
              <div class="topic">Phone</div>
              <div class="text-one">+0098 9893 5647</div>
              <div class="text-two">+0096 3434 5678</div>
            </div>
            <div class="email details">
              <i class="fas fa-envelope"></i>
              <div class="topic">Email</div>
              <div class="text-one">codinglab@gmail.com</div>
              <div class="text-two">info.codinglab@gmail.com</div>
            </div>
          </div>
          <div class="right-side">
            <div class="topic-text">Send us a message</div>
            <p>If you have any work from me or any types of quries related to my tutorial, you can send me message from here. It's my pleasure to help you.</p>
          <form action="#">
            <div class="input-box">
              <input type="text" placeholder="Enter your name" name="name" id="name" required>
              <br>
            </div>
            <div class="input-box">
              <br>
              <input type="tel" placeholder="Enter your number" pattern="[0-9]{10}" name="mobile" id="mobile" required>
            </div>
            <div class="input-box"> 
              <br>
              <input type="text" placeholder="Enter your email" name="email" id="email">
            </div>
            <div class="input-box">
              <br>
              <br>
              <textarea rows="4" cols="50" placeholder="Enter your quries" name="quries" id="quries"></textarea>
            </div>
            <div class="input-box message-box">
              
            </div>
            <div class="button">
              <input type="submit" value="Submit">
            </div>
          </form>
        </div>
        </div>
      </div>
</body>
</html>