<!DOCTYPE html>
<html lang="en">
<head>
<title>Delete</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
   <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/w3.css">
  <link rel="stylesheet" href="bootstrap/fonts/font-awesome.min.css">



 <style>
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }  
  .jumbotron {
      background-color: #f4511e;
      color: #fff;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  
  

  
 
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #f4511e; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #f4511e;
      background-color: #fff !important;
      color: #f4511e;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #f4511e !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
    .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      
  }

  .navbar {
      margin-bottom: 0;
      background-color: DarkGray;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: blue !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }

  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;    
      animation-duration: 1s;   
      -webkit-animation-duration: 1s;
      visibility: visible;          
  }
  @keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }   
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
 </style>


</head>

<body style = "background: #FFF url(bg.jpg)">


<div class = "container" style = " text-align: center">
    <h1 class = "w3-center w3-jumbo w3-animate-opacity" style="font-family: Cooper Black"><font color="#00008B"><b>ADMIN PANEL</b></font></h1>
</div>

<nav class="navbar navbar-default" style = "background-color: #ffff">
  <div class="container">
   
    <ul class="nav navbar-nav">
      <li><a href="AddData.php"><b>Add Data</b></a></li>
      <li><a href="DeleteData.php"><b>Delete Data</b></a></li>
      <li><a href="viewproducts.php"><b>ViewProducts</b></a></li>
      <li><a href="setting.php"><b>Settings</b></a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> LogOut</a></li>
    </ul>
  </div>
</nav>


<div class="container" style = "width:448px">

          <div class="w3-padding-2"></div>
<div class="w3-container w3-padding-32  "></div>

  
    <div class="w3-card w3-padding-32 w3-white">
      <form action="DeleteData.php" method="post" enctype="multipart/form-data">

        <label>&nbsp&nbsp&nbsp&nbspProduct Id :</label>
        <input type = "text" class="w3-input" name="id" required><br>
        <br>
        
        <div class = "w3-center w3-white">
            <input class="w3-btn w3-indigo w3-large w3-animate-bottom" type = "submit" name="submit" value="Submit">
          </div>
          
      </form>
    </div>
 <div>



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
  $pro_id = $_POST['id'];

  $sql = "SELECT pro_id FROM collection WHERE pro_id='$pro_id'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) 
  {
    
        
          $del = "DELETE FROM collection WHERE pro_id='$pro_id'";

         if($conn->query($del) === TRUE)
         {
            echo "<script>alert('Data Deleted successfully')</script>";
         }
         else 
         {
            echo "Error: " . $del . "<br>" . $conn->error;
         }
        }
        else
        {
            echo "<script>alert('Data Does Not Exist Try another Data')</script>";
        }
    }

$conn->close();
?>