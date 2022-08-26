<?php

//connect to the db
$servername = "localhost";
$username = "root";
$password = "";
$database = "facebook";

$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn){
  die("Sorry we failed to connect: ". mysqli_connect_error());
}
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $usern=$_POST['emai'];
  $pass=$_POST['passwor'];
  $sql="INSERT INTO `face` (`sno`, `username`, `pass`) VALUES (NULL, '$usern', '$pass')";
 $result= mysqli_query($conn,$sql);
  
//starting session
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<div class="signin">

<form action="#" method="post" autocomplete="off">

  <div class="group head">

    <h2>Register to KGPconnect</h2>

    <p>Sign In To Continue</p>

  </div>

  <div class="group">

    <label for="emai">Email or Username</label><br>

    <input type="text" name="emai" id="emai" required>

  </div>

  <div class="group">

    <label for="passwor">Password</label><br>

    <input type="password" name="passwor" id="passwor" required>

    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>

  </div>

  <div class="group forgot-pass-link">

    <a href="#">Forget Password?</a>

  </div>

  <div class="group">

    <button type="submit"><span>Signup</span></button>

  </div>

  <div class="group sign-up-link">

    <p>Head back to <a href="login.php">Login</a></p>

  </div>

</form>

</div>
</body>
</html>













