<!DOCTYPE html>

<html>

<head>

  <link rel="stylesheet" type="text/css" href="../style.css">
  <title> Friends </title>

</head>

<body>
  <h1> All Data of Friends</h1>

  <table style="width:100%">
    <?php
    include("db_connection.php");

    $sql1 = "Show columns from friends";
    $result1 = mysqli_query($conn, $sql1);

    while($row1 = mysqli_fetch_row($result1)){
      ?>
      <th> <?php echo $row1[0]; ?> </th>

    <?php
    }
     ?>

     <?php
     $sql = "select * from friends";
     $result = mysqli_query($conn, $sql);

     while($row = mysqli_fetch_row($result)){
       ?>

       <tr>
           <th>
             <?php //echo $row[0]; //user_id?>

             <?php
                     // HERE I DISPLAYED THE 'user_name' USING 'user_id'
                     $user = "select user_name from user_info where user_id='$row[0]'" ;
                     $res = mysqli_query($conn, $user);
                     $ans = mysqli_fetch_array($res);
                     echo $ans[0];
                     //
             ?>

            </th>
           <th>
             <?php //echo $row[1];  // user_id ?>

             <?php
                     // HERE I DISPLAYED THE 'user_name' USING 'user_id'
                     $user = "select user_name from user_info where user_id='$row[1]'" ;
                     $res = mysqli_query($conn, $user);
                     $ans = mysqli_fetch_array($res);
                     echo $ans[0];
                     //
             ?>

           </th>


       </tr>
    <?php } ?>

</table>


</body>

<footer>
</footer>


</html>
