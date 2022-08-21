<?php
include("db_connection.php");
$j_name = $_POST["j_name"];
$category = $_POST["category"];

// This is for convert from "online_judge_name" into "online_judge_id"
$sql1 = "select online_judge_id from online_judge_info where online_judge_name = '$j_name'" ;
$res = mysqli_query($conn, $sql1);
$j_id = mysqli_fetch_array($res);
//

$sql = "INSERT INTO `problems` (`problem_id`, `problem_judge`, `problem_category`) VALUES ('NULL', '$j_id[0]', '$category')";
$result = mysqli_query($conn, $sql);

if($result){
  echo "Input Successful";
  sleep(1);
  header("Location: problems_info.php");
}
else{
  echo "ERROR".mysqli_error(1);
}

 ?>
