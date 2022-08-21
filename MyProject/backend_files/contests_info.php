<!DOCTYPE html>

<html>

<head>

  <link rel="stylesheet" type="text/css" href="../style.css">
  <title> Contests </title>

</head>

<body>
  <h1> All Data of Contests </h1>

  <table style="width:100%">
    <?php
    include("db_connection.php");

    $sql1 = "Show columns from contests";
    $result1 = mysqli_query($conn, $sql1);

    while($row1 = mysqli_fetch_row($result1)){
      ?>
      <th> <?php echo $row1[0]; ?> </th>

    <?php
    }
     ?>

     <?php
     $sql = "select * from contests";
     $result = mysqli_query($conn, $sql);

     while($row = mysqli_fetch_row($result)){
       ?>

       <tr>
           <th> <?php echo $row[0];?> </th>
           <th> <?php echo $row[1]; ?> </th>
           <th>
             <?php //echo $row[2]; // online_judge_id ?>
             <?php
                     // HERE I DISPLAYED THE 'online_judge_name' USING 'online_judge_id'
                     $judge = "select online_judge_name from online_judge_info where online_judge_id='$row[2]'" ;
                     $res = mysqli_query($conn, $judge);
                     $ans = mysqli_fetch_array($res);
                     echo $ans[0];
                     //
             ?>

            </th>
           <th>
             <?php //echo $row[3]; // user_id ?>

             <?php
                     // HERE I DISPLAYED THE 'user_name' USING 'user_id'
                     $user = "select user_name from user_info where user_id='$row[3]'" ;
                     $res = mysqli_query($conn, $user);
                     $ans = mysqli_fetch_array($res);
                     echo $ans[0];
                     //
             ?>

           </th>
           <th> <?php echo $row[4]; ?> </th>

       </tr>
    <?php } ?>

</table>


</body>

<footer>
</footer>


</html>
