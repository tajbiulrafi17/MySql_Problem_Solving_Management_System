<!DOCTYPE html>

<html>

<head>

  <link rel="stylesheet" type="text/css" href="../style.css">
  <title> Judge Info </title>
</head>

<body>
  <h1> All Data of Judge Info </h1>

  <table style="width:100%">
    <?php
    include("db_connection.php");

    $sql1 = "Show columns from online_judge_info";
    $result1 = mysqli_query($conn, $sql1);

    while($row1 = mysqli_fetch_row($result1)){
      ?>
      <th> <?php echo $row1[0]; ?> </th>

    <?php
    }
     ?>

     <?php
     $sql = "select * from online_judge_info";
     $result = mysqli_query($conn, $sql);

     while($row = mysqli_fetch_row($result)){
       ?>

       <tr>
         <th> <a href="../demo1.php?name=<?php echo $row[0]; ?>"> <?php echo $row[0];?> </th>
           <th> <?php echo $row[1]; ?> </th>
           <th> <?php echo $row[2]; ?> </th>

       </tr>
    <?php } ?>

</table>
<?php




 ?>


</body>

<footer>
</footer>


</html>
