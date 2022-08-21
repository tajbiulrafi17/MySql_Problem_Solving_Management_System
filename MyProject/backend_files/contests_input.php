<?php
include("db_connection.php");


$name = $_POST["name"];
$j_name =  $_POST["j_name"];
$u_name = $_POST["u_name"];
$date = $_POST["date"];

// This is for convert from "online_judge_name" into "online_judge_id"
$sql1 = "select online_judge_id from online_judge_info where online_judge_name = '$j_name'" ;
$res1 = mysqli_query($conn, $sql1);
$j_id = mysqli_fetch_array($res1);
//
// This is for convert "user_name" into "user_id"
$sql2 = "select user_id from user_info where user_name = '$u_name'" ;
$res2 = mysqli_query($conn, $sql2);
$u_id = mysqli_fetch_array($res2);
//

$sql = "INSERT INTO `contests` (`Contest_id`, `Contest_name`, `Contest_host`, `Contest_winner`, `Contest_date`) VALUES ('NULL', '$name', '$j_id[0]',  '$u_id[0]', '$date')" ;
$result = mysqli_query($conn, $sql);

if($result){
  echo "Input Successful";
  sleep(1);
  header("Location: contests_info.php");
}
else{
  echo "ERROR".mysqli_error(1);
}

 ?>
