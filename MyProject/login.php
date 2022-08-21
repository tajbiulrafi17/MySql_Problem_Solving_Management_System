<!Doctype html>

<html>


<head>
  <meta charset="utf-8">
  <meta name="author" content="Rafi">
  <meta name="description" content="Login Page">
  <link rel="stylesheet" type="text/css" href="style_login.css">
  <link rel="icon" type="png/gif" href="img/login_icon.png">
  <title> Login </title>
</head>


<body>
  <div class="title">
    <h1 id="h1ForUser"> Problem Solving Management</h1>
    <h4 id="h4ForUser"> Admin Panel </h4>
  </div>

  <div class="login_form">

    <form method="post" action="backend_files/login_backend.php">

    <table>
      <tr>
        <th>
          <label for="username"> Username: </label>

        </th>
        <th>
          <input type="text" name="username_input" placeholder="Enter your username">
        </th>
      </tr>
      <tr>
        <th>
          <label for="password"> Password: </label>

        </th>
        <th>
          <input type="text" name="password_input" placeholder="Enter your password">
        </th>
      </tr>
      <tr>
        <th> <input type="submit" value="Login" style="margin-left: 100px; margin-top: 20px;">  </th>
      </tr>
      <tr>
        <th></th>
        <th> <a href="forgot_password.php"> Forgot Password </a> </th>
      </tr>



<footer>

</footer>

</html>
