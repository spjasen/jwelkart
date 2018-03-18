<!DOCTYPE html>
<html lang="en">
<head>
<title>Add</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="bootstrap/css/w3.css">
<script src="bootstrap/js/bootstrap.min.js"></script>
<style>
  .container {
        background-color: #FFFFFF;
    }
    .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      margin: auto;
  }

  div.columns       { width: 1080px; }
div.columns div   { width: 220px; height: 220px; float: left; }
  
.showR{
  background-color: #ffffff;
  border: 3px solid #f3f6f9;
  padding: 3px;
  width:233px;
  height:220px;
margin-right: 17px;
margin-bottom: 17px;

}
.showR:hover
{
  background-color: #f3f6f9;
  border:1px solid #000000;
}


@media screen and (max-width: 768px) {
   .columns       { width: 768px; }
  }
  @media screen and (max-width: 480px) {
    div.columns       { width: 480px; }
  }

</style>
</head>
<body>
       
</body>
</html>

  <?php

function getLink_data()
{
  
$servername = "localhost";
$username = "root";
$password = "";
$database = "jwelkart";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

error_reporting(0);

    $sql = "SELECT * FROM collection order by RAND() LIMIT 0,20";
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

  <img src='admin_area/product_img/$pro_img' style='width:210px;height:160px;''><br><br>
  <p class='w3-center'>$pro_name</p>
</div></div>
                        
                            
              ";
      

            }
    }
   
    
  }

getLink_data();


?>



