<?php
include("db_connection.php");


$u_name = $_POST["u_name"];
$f_name =  $_POST["f_name"];

// This is for convert "user_name" into "user_id"
$sql1 = "select user_id from user_info where user_name = '$u_name'" ;
$res1 = mysqli_query($conn, $sql1);
$u_id = mysqli_fetch_array($res1);
//
// This is for convert "user_name" into "user_id"
$sql2 = "select user_id from user_info where user_name = '$f_name'" ;
$res2 = mysqli_query($conn, $sql2);
$f_id = mysqli_fetch_array($res2);
//

$sql = "INSERT INTO `friends` (`User_id`, `Friends_id`) VALUES ('$u_id[0]', '$f_id[0]')";
$result = mysqli_query($conn, $sql);

if($result){
  echo "Input Successful";
  sleep(1);
  header("Location: friends_info.php");
}
else{
  echo "ERROR".mysqli_error(1);
}

 ?>
