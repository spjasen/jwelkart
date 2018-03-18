<!DOCTYPE html>
<html lang="en">
<head>
  <title>Rings</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
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
table {

    border-collapse: collapse;
}

table, th, td {
    border: 1px solid black;
    padding: 15px;
}
.w3-tangerine {
  font-family: 'Tangerine', serif;
}
</style>
</head>

<body style = "background: #FFF url(UI_IMG/bg47.png)">

<div class="w3-container" style="background-color: white">
<div class="container">
 <div class="w3-padding-4"></div>

<div class="row ">
  <div class="col-sm-2">
       <img src="Logo.png" class="img-rounded" width="180" height="100">
  </div>

  <div class="col-sm-10">
  <div class="w3-padding-16  w3-margin-2"></div>

        <ul class="w3-navbar w3-center w3-card-2 w3-indigo w3-large" >
        <li><a href="homepage.php">Home</a></li>

        <li class="w3-dropdown-hover w3-hover-blue">
          <a class="w3-hover-indigo" href="#">Category <i class="fa fa-caret-down"></i></a>
          <div class="w3-dropdown-content w3-white w3-card-4">

           <a href="earings.php">Earings</a>
          <a href="necklace.php">Necklace</a>
           <a href="rings.php">Rings</a>
           <a href="bangles.php">Bangels</a>
           <a href="noserings.php">Noserings</a>
           <a href="armband.php">Armband</a>
           <a href="pendant.php">Pendant</a>
          </div>
 <li><a href="compare_sec.php">Compare</a></li>
        <li><a href="aboutus.html">AboutUs</a></li>

        <li><a href="partner.html">Partners</a></li>
        <li><a href="logout.php">Logout</a></li>
  <li><a href="search.php">Search</a></li>
  </li>
  <ul class="w3-right">
    <li><a href="aboutus.html"><i class="fa fa-envelope w3-small w3-large"></i></a></li>

  </ul>
  </ul>

  </div>
</div>
<div class="w3-padding-4"></div>
</div>




</div>
</div>
<div class="w3-center w3-container w3-red w3-bottombar w3-border-red w3-border">

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
if(isset($_GET['pro_id']))
{

  $id = $_GET['pro_id'];
    $sql = "SELECT * FROM collection WHERE pro_id ='$id' ";
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
              $pro_src = $row["pro_link"];
              echo "


<div class='row '>
  <div class='col-sm-5'> <img class='w3-border w3-animate-zoom'  src='admin_area/product_img/$pro_img' style='width:100%;height:400px;' >
  <br><br><br>
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <a href='http://$pro_src'><button class='w3-btn w3-green w3-text-shadow  w3-xlarge'>Buy Now</button></a>
  <br>
  <br>
  </div>

  <div class='col-sm-7 ' >

  <p><b class='w3-tangerine w3-xxxlarge w3-text-indigo'>$pro_name</b></p>

  <p><h3><b>Rs : </b>$pro_price</h3></p>
  <hr>
  <br>
  <br>

  <h5><b>Specification :</b></h5>
  <hr>
  <div class='w3-padding-8'></div>

  <div class='w3-responsive'>
<table>

 <tr>
  <td><b>Product Category </b></td>
  <td>$pro_cate</td>
  </tr>
  <tr>
  <td><b>Product Material </b></td>
  <td>$pro_mat</td>
  </tr>
  <tr>
  <td><b>Product Certificate </b></td>
  <td>$pro_certi</td>
  </tr>
  <tr>
  <td><b>Product Description  </b></td>
  <td>$pro_desc</td>
  </tr>
  <tr>
  <td><b>Product Weight </b> </td>
  <td>$pro_wait</td>
  </tr>
  <tr>
  <td><b>Product Care :</b></td>
  <td>$pro_care</td>
</tr>
   </div>
  </table>
  </div>
</div>









              ";
      }

            }
    }







?>
<div class="w3-padding-4"></div>
<div class="w3-padding-4"></div>
</div>



<div class="w3-padding-8"></div>
<div class="w3-center w3-container w3-red w3-bottombar w3-border-red w3-border">

</div>
<footer class="w3-container w3-indigo">
  <p class="w3-right-align">Copyright 2017</p>
</footer>

</body>
</html>
