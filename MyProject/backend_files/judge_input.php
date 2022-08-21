<?php
include("db_connection.php");
$name = $_POST["judge_name"];
$rank = $_POST["judge_rank"];


$sql = "INSERT INTO `online_judge_info` (`online_judge_id`, `online_judge_name`, `online_judge_rank`) VALUES ('NULL', '$name', '$rank')";
$result = mysqli_query($conn, $sql);

if($result){
  echo "Input Successful";
  sleep(1);
  header("Location: judge_info.php");
}
else{
  echo "ERROR".mysqli_error(1);
}


 ?>
