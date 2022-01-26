<?php
$dbhost = 'localhost';
$dbuser = 'u731575966_tarkash';
$dbpass = 's>lQ#LO3:m';
$dbname = 'u731575966_tarkash';


$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$cname = $_POST['cname'];
$query = $_POST['query'];



$dt= date("l jS \of F Y h:i:s A");






$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

 $sql = "INSERT INTO client ";
    $sql .= "(name, company, contact, email, query, date) ";
    $sql .= "VALUES (";
    $sql .= "'" . $name . "',";
    $sql .= "'" . $cname . "',";
    $sql .= "'" . $mobile . "',";
    $sql .= "'" . $email . "',";
    $sql .= "'" . $query . "',";
    $sql .= "'" . $dt . "'";
    $sql .= ")";

     if(mysqli_query($connection,$sql)){
     	header("location: https://www.tarkash-world.com/thankyou.html");
     }else{ header("location: https://www.tarkash-world.com/tryagain.html");

     }
    mysqli_close($connection);

?>

<!doctype html>

<html lang="en">
  <head>
    <title></title>
    <meta charset="utf-8">
  </head>

  <body>
      <h3 style="color=blue">tt</h3>
      </body>
      </html>