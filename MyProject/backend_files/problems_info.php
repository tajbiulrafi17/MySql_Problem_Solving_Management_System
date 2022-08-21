<!DOCTYPE html>

<html>

<head>
  <title> Problems </title>
  <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
  <h1> All Data of Probelms </h1>

  <table style="width:100%">
    <?php
    include("db_connection.php");

    $sql1 = "Show columns from problems";
    $result1 = mysqli_query($conn, $sql1);

    while($row1 = mysqli_fetch_row($result1)){
      ?>
      <th> <?php echo $row1[0]; ?> </th>

    <?php
    }
     ?>
     <?php
     $sql = "select * from problems";
     $result = mysqli_query($conn, $sql);

     while($row = mysqli_fetch_row($result)){
       ?>

       <tr>
           <th> <?php echo $row[0];?> </th>
           <th>

             <?php // echo $row[1];
                   // This just shows the online_judge_id
             ?>

              <?php
                      // HERE I DISPLAYED THE 'online_judge_name' USING 'online_judge_id'
                      $judge = "select online_judge_name from online_judge_info where online_judge_id='$row[1]'" ;
                      $res = mysqli_query($conn, $judge);
                      $ans = mysqli_fetch_array($res);
                      echo $ans[0];
                      //
              ?>

            </th>
           <th> <?php echo $row[2]; ?> </th>

       </tr>
    <?php } ?>

</table>


</body>

<footer>
</footer>


</html>
