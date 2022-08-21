<?php
$servername = "localhost";
$username = "root";
$db = "problem_solving_management";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $db);

if(!$conn){
  die("Error in connecting. ".mysqli_connect_error());
}
else{
  //echo "Successful !";
}

 ?>
