<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <meta name="author" content="Rafi">
  <meta name="description" content="User Insert">
  <link rel="stylesheet" type="text/css" href="style.css">

  <title> Participated Insert </title>

</head>

<body>
  <h1 id="MainTitle01"> Add Participated </h1>
  <hr id="hr01">

  <div class="form">
    <form style="margin-left: 10px;" action="backend_files/participated_input.php" method="post">

      <label> Contests Name: </label>
      <select id="option" name="c_name">
        <?php
        include_once("backend_files/db_connection.php");
        $sql1 = "select contest_name FROM `contests`";
        $result1 = mysqli_query($conn, $sql1);
        while ($row = mysqli_fetch_row($result1)) {
          ?>
          <option value="<?php echo $row[0];?>"> <?php echo $row[0];?> </option>
        <?php
        }
        ?>
      </select>
      <br>
      <label> User Name: </label>
      <select id="option" name="u_name">
        <?php
        include_once("backend_files/db_connection.php");
        $sql2 = "select user_name FROM `user_info`";
        $result2 = mysqli_query($conn, $sql2);
        while ($row = mysqli_fetch_row($result2)) {
          ?>
          <option value="<?php echo $row[0];?>"> <?php echo $row[0];?> </option>
        <?php
        }
        ?>
      </select>


      <br>
      <br>
      <input type="submit" value="Submit" style="margin-left: 30%; color: green;"
      <br>

    </form>
  </div>

</body>

<footer>

</footer>

</html>
