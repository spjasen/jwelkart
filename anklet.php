<!DOCTYPE html>
<html lang="en">
<head>
  <title>Anklet</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
  <style>
  .container {
        background-color: #FFFFFF;
    }
    .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      margin: auto;
  }

  hr {
    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 1px;
}


</style>
</head>

<body style = "background: #FFF url(UI_IMG/bg47.png)">

<div class="container">
 <div class="w3-padding-4"></div>

<div class="row">
  <div class="col-sm-2">
       <img src="Logo.jpg" class="img-rounded" width="180" height="110">
  </div>

  <div class="col-sm-10">
  <div class="w3-padding-16  w3-margin-2"></div>

        <ul class="w3-navbar w3-card-2 w3-light-grey">
        <li><a href="homepage.php">Home</a></li>
        <li><a href="#">Compare</a></li>
        <li class="w3-dropdown-hover w3-hover-indigo">
          <a class="w3-hover-indigo" href="#">Category <i class="fa fa-caret-down"></i></a>
          <div class="w3-dropdown-content w3-white w3-card-4">
           <a href="earings.php">Earings</a>
          <a href="necklace.php">Necklace</a>
           <a href="rings.php">Rings</a>
           <a href="bangles.php">Bangels</a>
           <a href="anklet.php">Anklet</a>
           <a href="pendant.php">Pendant</a>
          </div>

        <li><a href="#">AboutUs</a></li>

  <li><a href="search.php">Search</a></li>
  <li><a href="logout.php">Logout</a></li>
  </li>
  </ul>

  </div>
</div>
<hr>
</div>




</div>

<div class="container ">
<div class="w3-padding-4"></div>
<?php



$servername = "localhost";
$username = "root";
$password = "";
$database = "jwelkart";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

error_reporting(0);

    $sql = "SELECT * FROM collection WHERE pro_cat ='anklet'";
    $result = $conn->query($sql);

  if ($result->num_rows > 0)
  {
    while($row = $result->fetch_assoc())
    {
              $pro_id = $row["pro_id"];
              $pro_name = $row["pro_name"];
              $pro_cate = $row["pro_cat"];
              $pro_price = $row["pro_price"];
              $pro_mat = $row["pro_mat"];
              $pro_certi = $row["pro_cert"];
              $pro_desc =  $row["pro_des"];
              $pro_wait =  $row["pro_wait"];
              $pro_care =  $row["pro_care"];
              $pro_img = $row["pro_img"];

              echo "



                   <div class='columns'>
                <div class='showR'>

  <a href='detail.php?pro_id=$pro_id'><img src='admin_area/product_img/$pro_img' style='width:400px;height:400px;'></a><br><br>
  <b class='w3-left-align'>$pro_name</b><button class='w3-right  '>Compare</button>
</div></div>


              ";


            }
    }







?>
<div class="w3-padding-4"></div>
<div class="w3-padding-4"></div>
</div>


<div class="container">


<hr>
<footer class="w3-container w3-light-grey">
  <p class="w3-right-align">Copyright 2017</p>
</footer>
<div class="w3-padding-4"></div>
</div>

</body>
</html>
