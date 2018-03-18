<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="bootstrap/css/w3.css">
<script src="bootstrap/js/bootstrap.min.js"></script>


</head>

<body style = "background: #FFF url(bg.jpg)">


<div class = "container" style = " text-align: center">
    <h1 class = "w3-center w3-jumbo w3-animate-opacity" style="font-family: Cooper Black"><font color="#00008B"><b><u>ADMIN PANEL</u></b></font></h1>
</div>

<div class="w3-container w3-padding-64 "></div>


  <div class="container w3-card-4  w3-center w3-light-grey" style = "width:450px"><p class="w3-xxlarge" style="font-family:Cooper">Login</p></div>
    <div class="container w3-card-2 w3-padding-32 w3-white" style = "width:450px">
      <form action="login.php" method="post" enctype="multipart/form-data">
        <label>Admin UserID :</label>
        <input type = "text" class="w3-input" name="usr_id" required><br>
        <br>
        <label>Admin Password :</label>
        <input type = "password" class="w3-input" name="user_pass" required><br>
        <br>
        <div class = "w3-center w3-white">
            <input class="w3-btn w3-indigo w3-large w3-animate-bottom" type = "submit" name="submit">
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
    $user_email=$_POST['usr_id'];
    $user_pass=$_POST['user_pass'];

    $sql = "SELECT user_id,pass FROM user_control where role = 'admin'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0)
    {
      while($row = $result->fetch_assoc())
      {
          if($row["user_id"] === $user_email && $row["pass"] === $user_pass)
          {
            echo "<script>window.open('AddData.php','_self')</script>";

            $_SESSION['email']=$user_email;

          }
          else
          {
            echo "<script>alert('Email or password is incorrect!')</script>";
          }
      }
    }
}

?>
