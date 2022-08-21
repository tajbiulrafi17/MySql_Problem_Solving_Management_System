<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <meta name="author" content="Rafi">
  <meta name="description" content="User Insert">
  <link rel="stylesheet" type="text/css" href="style.css">

  <title> User Insert </title>

</head>


<body>
  <h1 id="MainTitle01"> ADD USER INFO </h1>
  <hr id="hr01">

  <div class="form">
    <form style="margin-left: 10px;" action="backend_files/user_input.php" method="post">
      <label> Name: </label>
      <input type="text" name="name" placeholder="Name">
      <br>
      <label> Email: </label>
      <input type="text" name="email" placeholder="Email">
      <br>
      <label> Password: </label>
      <input type="text" name="password" placeholder="Password">
      <br>
      <label> Institute: </label>
      <input type="text" name="institute" placeholder="Institute">
      <br>
      <label> Country: </label>
      <input type="text" name="country" placeholder="Country">
      <br>


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
