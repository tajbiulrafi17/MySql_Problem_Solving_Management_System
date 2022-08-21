<?php
include("db_connection.php");

$username = $_POST['username_input'];
$password = $_POST['password_input'];

$login_status = "Unseccessful!";

if(trim($username) == "" || trim($password)== ""){
  echo "Please enter a valid input"."<br>";

  $url = "http://localhost/CSE311_project_1/login.php";
  header("Refresh: 2; URL = $url");

}

else {
  $sql =  "Select admin.username, admin.password from admin where admin.username = '$username' AND admin.password = '$password' ";
  $result = mysqli_query($conn, $sql);
  $row_num = mysqli_num_rows($result);
  if($row_num == 1) $login_status = "Successful! Welcome as Admin!";


  if($login_status == "Unseccessful!"){
    $sql =  "Select user_info.User_name, user_info.User_password from user_info where user_info.User_name = '$username' AND user_info.User_password = '$password' ";
    $result = mysqli_query($conn, $sql);
    $row_num = mysqli_num_rows($result);
    if($row_num == 1) $login_status = "Successful! Welcome as User!";

  }
  echo $login_status;

}

if($login_status == "Successful! Welcome as Admin!"){
  $url1 = "http://localhost/CSE311_project_1/login_landing.php";
  header("Refresh: 2; URL = $url1");
}
else if($login_status == "Successful! Welcome as User!"){
  $url2 = "http://localhost/CSE311_project_1/login_landing_user.php";
  header("Refresh: 2; URL = $url2");
}
else{
  $url2 = "http://localhost/CSE311_project_1/login.php";
  header("Refresh: 2; URL = $url2");
}

 ?>
