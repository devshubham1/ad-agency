<?php
$dbhost = 'localhost';
$dbuser = 'u731575966_tarkash';
$dbpass = 's>lQ#LO3:m';
$dbname = 'u731575966_tarkash';

$appliedfor = $_POST['appliedfor'];
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$exp = $_POST['exp'];
$why = $_POST['why'];



$dt= date("l jS \of F Y h:i:s A");




#file name with a random number so that similar dont get replaced
     $resume = rand(1000,10000)."-".$_FILES["file"]["name"];
 
    #temporary file name to store file
    $tname = $_FILES["file"]["tmp_name"];
   
     #upload directory path
    $uploads_dir = 'uploads';
    #TO move the uploaded file to specific location
    
         move_uploaded_file($tname, $uploads_dir.'/'.$resume);

#connection string

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

 $sql = "INSERT INTO applicant ";
    $sql .= "(appliedfor, name, mobile, email, exp, why , resume , date) ";
    $sql .= "VALUES (";
    $sql .= "'" . $appliedfor . "',";
    $sql .= "'" . $name . "',";
    $sql .= "'" . $mobile . "',";
    $sql .= "'" . $email . "',";
    $sql .= "'" . $exp . "',";
    $sql .= "'" . $why . "',";
    $sql .= "'" . $resume . "',";
    $sql .= "'" . $dt . "'";
    $sql .= ")";

     if(mysqli_query($connection,$sql)){
     	header("location: https://www.tarkash-world.com/success.html");
     }else{ header("location: https://www.tarkash-world.com/failed.html");

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