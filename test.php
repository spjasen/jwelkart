<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "jwelkart";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

error_reporting(0);

    $user_email='sddf@gmail.com';
    $user_pass='12345678';
    $phn_no='1234567890';
    $temp='';
    if(strlen($user_pass) < 8 )
    {
      echo "<script>alert('password is less than 8 character')</script>";
    }
    else if(strlen($phn_no) < 10 )
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
            $sqlo = "INSERT INTO user_control (id, user_id, phn_no,pass,role) VALUES ('','".$user_email."', '".$phn_no."','".$user_pass."','user')";
            if($conn->query($sqlo) === TRUE)
            {
              echo "<script>alert('Registered successfully')</script>";
              echo "<script>window.open('index.php','_self')</script>";

            }

          }







      }


?>
