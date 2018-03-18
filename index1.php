<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="bootstrap/css/w3.css">
<script src="bootstrap/js/bootstrap.min.js"></script>


</head>

<body style = "background: #FFF url(bg.jpg)">




<div class="w3-container w3-padding-64 "></div>


  <div class="container w3-card-4  w3-center w3-light-grey" style = "width:450px"><p class="w3-xxlarge" style="font-family:Cooper">Login</p></div>
    <div class="container w3-card-2 w3-padding-32 w3-white" style = "width:450px">
      <form action="index1.php" method="post" enctype="multipart/form-data">
        <label>UserID :</label>
        <input type = "text" class="w3-input" name="usr_id" required><br>
        <br>
        <label> Password :</label>
        <input type = "password" class="w3-input" name="usr_pass" required><br>
        <br>
        <div class = "w3-center w3-white">
            <input class="w3-btn w3-indigo w3-large w3-animate-bottom" type = "submit" name="submit"><br><br>
            <a href="register.php">Register Here</a>
          </div>


      </form>
    </div>

</body>
</body>
</html>



<?php
   $conn=mysqli_connect("localhost","root","","jwelkart");
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $myusername = mysqli_real_escape_string($conn,$_POST['usr_id']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['usr_pass']);

      $sql = "SELECT user_name from user_control where user_id='$myusername' and pass='$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_BOTH);
      $active=$row['active'];


      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {

         header("location: homepage.php");

      }else {
		 $message = "Invalid Username or Password!";
echo "<script type='text/javascript'>alert('$message');</script>";
      }
   }
?>
