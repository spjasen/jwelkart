<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Register</title>
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
      <form action="register.php" method="post" enctype="multipart/form-data">
        <label> UserName :</label>
        <input type = "text" class="w3-input" name="usr_name" required><br>
        <br>
        <label> UserID :</label>
        <input type = "email" class="w3-input" name="usr_id" required><br>
        <br>
        <label>phone no :</label>
        <input type = "number" class="w3-input" name="phn_no"  required><br>
        <br>
        <label> Password :</label>
        <input type = "password" class="w3-input" name="user_pass" required><br>
        <br>
        <div class = "w3-center w3-white">
            <input class="w3-btn w3-indigo w3-large w3-animate-bottom" type = "submit" name="submit"><br>

          </div>


      </form>
    </div>

</body>
</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "jwelkart";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

error_reporting(0);

if(isset($_POST['submit']))
{
    $user_name=$_POST['usr_name'];
    $user_email=$_POST['usr_id'];
    $user_pass=$_POST['user_pass'];
    $phn_no=$_POST['phn_no'];
    if(strlen($user_pass) < 8 )
    {
      echo "<script>alert('password is less than 8 character')</script>";
    }
    else if(strlen($phn_no) < 10 || strlen($phn_no) > 10)
    {
      echo "<script>alert('invalid phone no')</script>";
    }
    else {


      $sqli = "SELECT user_id FROM user_control where user_id = '".$user_email."'";
      $result = $conn->query($sqli);
      while($row = $result->fetch_assoc()) {
           $temp = $row["user_id"];
      }

      if($temp ===  $user_email)
      {
        echo "<script>alert('user already exist')</script>";
      }
      else{
        $sqlo = "INSERT INTO user_control (id,user_name, user_id, phn_no,pass,role) VALUES ('','$user_name','$user_email','$phn_no','$user_pass','user')";
        if($conn->query($sqlo) === TRUE)
        {
          echo "<script>alert('Registered successfully')</script>";
          echo "<script>window.open('index.php','_self')</script>";

        }

      }






      }
}

?>
