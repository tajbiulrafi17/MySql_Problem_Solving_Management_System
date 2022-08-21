<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <meta name="author" content="Rafi">
  <meta name="description" content="User Insert">
  <link rel="stylesheet" type="text/css" href="style.css">

  <title> Forgot Password </title>

</head>

<body>
  <h1 id="MainTitle01"> Forgot Password </h1>
  <hr id="hr01">

  <div class="form">
    <form style="margin-left: 10px;" action="backend_files/forgot_password_backend.php" method="post">

      <label> Enter your username: </label>
      <input type="text" name="username" placeholder="Username">
      <br>
      <label> Enter recovery eamil: </label>
      <input type="text" name="email" placeholder="Email">

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
