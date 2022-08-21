<?php
include("db_connection.php");

$username = $_POST['username'];
$email = $_POST['email'];

$status = "False";

$sql =  "Select admin.username, admin.email from admin where admin.username = '$username' AND admin.email = '$email' ";
$result = mysqli_query($conn, $sql);
$row_num = mysqli_num_rows($result);
if($row_num == 1) $status = "True! Admin";

if($status == "False"){
  $sql1 =  "Select user_info.User_name, user_info.User_email from user_info where user_info.User_name = '$username' AND user_info.User_email = '$email' ";
  $result1 = mysqli_query($conn, $sql1);
  $row_num1 = mysqli_num_rows($result1);
  if($row_num1 == 1) $status = "True! User";
}

if($status == "True! Admin"){
  $url1 = "http://localhost/CSE311_project_1/add_new_pass.php";
  echo "Information Valid!";
  //pass the username to next page
  session_start();
  $_SESSION["user"] = $username;
  //
  header("Refresh: 2; URL = $url1");
}
else if($status == "True! User"){
    $url1 = "http://localhost/CSE311_project_1/add_new_pass_user.php";
    echo "Information Valid!";
    //pass the username to next page
    session_start();
    $_SESSION["user"] = $username;
    //
    header("Refresh: 2; URL = $url1");
}
else{
  $url2 = "http://localhost/CSE311_project_1/forgot_password.php";
  echo "Enter valid username and email!";
  header("Refresh: 2; URL = $url2");
}

 ?>
