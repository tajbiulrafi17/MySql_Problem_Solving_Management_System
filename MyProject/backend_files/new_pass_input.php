<?php
include("db_connection.php");

/// this is code for admins new password write into the database
/// here admins username, new password, confirmed password came from previous page

  session_start();
  $user = $_SESSION["user"];   // its admins username
  $pass1 = $_POST['pass1'];   // admins new password
  $pass2 = $_POST['pass2'];   // admins confirmed new password

  // echo $user;
  // echo $pass1;
  // echo $pass2;
  // sleep(3);

if (trim($pass1) != "") // check if password field was empty submitted
{
  if($pass1 == $pass2 )  // check the password and confirmed password are same
  {
    $sql = "update `admin` set password = '$pass1' WHERE username = '$user'";

    $result = mysqli_query($conn, $sql);

    if($result){
      echo "Password Updated! Login Again!";
      sleep(1);
      header("Location: ../login.php");
    }
    else{
      echo "ERROR".mysqli_error(1);
    }

  }
  else{
    echo "Password Not Match! RE-ENTER new password";
    $url1 = "http://localhost/CSE311_project_1/add_new_pass.php";
    header("Refresh: 2; URL = $url1");
  }
}
else{
  echo "Password Not Entered! RE-ENTER new password";
  $url1 = "http://localhost/CSE311_project_1/add_new_pass.php";
  header("Refresh: 2; URL = $url1");
}


 ?>
