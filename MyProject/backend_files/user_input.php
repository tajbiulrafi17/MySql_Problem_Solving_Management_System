<?php
include("db_connection.php");
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$institute = $_POST["institute"];
$country = $_POST["country"];



$sql = "INSERT INTO `user_info` (`user_id`, `user_name`, `user_email`, `user_password`, `user_institute`, `user_country`) VALUES ('NULL', '$name', '$email', '$password', '$institute', '$country')";
$result = mysqli_query($conn, $sql);

if($result){
  echo "Input Successful";
  sleep(1);
  header("Location: user_info.php");
}
else{
  echo "ERROR".mysqli_error(1);
}


 ?>
