<?php
include("db_connection.php");


$c_name = $_POST["c_name"];
$u_name =  $_POST["u_name"];

// This is for convert from "contest_name" into "contest_id"
$sql1 = "select contest_id from contests where contest_name = '$c_name'" ;
$res1 = mysqli_query($conn, $sql1);
$c_id = mysqli_fetch_array($res1);
//
// This is for convert "user_name" into "user_id"
$sql2 = "select user_id from user_info where user_name = '$u_name'" ;
$res2 = mysqli_query($conn, $sql2);
$u_id = mysqli_fetch_array($res2);
//

$sql = "INSERT INTO `participated` (`Contest_id`, `User_id`) VALUES ('$c_id[0]', '$u_id[0]')";
$result = mysqli_query($conn, $sql);



if($result){
  echo "Input Successful";
  sleep(1);
  header("Location: participated_info.php");
}
else{
  echo "ERROR".mysqli_error(1);
}

 ?>
