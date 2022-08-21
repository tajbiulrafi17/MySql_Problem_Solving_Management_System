<?php
include("db_connection.php");


$p_id = $_POST["p_id"];
$u_name =  $_POST["u_name"];
$date = $_POST["date"];

// This is for convert "user_name" into "user_id"
$sql1 = "select user_id from user_info where user_name = '$u_name'" ;
$res = mysqli_query($conn, $sql1);
$u_id = mysqli_fetch_array($res);
//

$sql1 = "INSERT INTO `solved` (`problem_id`, `user_id`, `solving_date`) VALUES ('$p_id', '$u_id[0]', '$date')";
$result = mysqli_query($conn, $sql1);



if($result){
  echo "Input Successful";
  sleep(1);
  header("Location: solved_info.php");
}
else{
  echo "ERROR".mysqli_error(1);
}

 ?>
