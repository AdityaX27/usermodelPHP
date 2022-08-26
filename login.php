


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
  $usern=$_POST['username'];
  $pass=$_POST['pass'];
  //$sql="INSERT INTO `face` (`sno`, `username`, `pass`) VALUES (NULL, '$usern', '$pass')";
//$result= mysqli_query($conn,$sql);
  
//starting session



session_start();
$_SESSION['user']=$usern;
$sql= "SELECT * FROM `face`";
$result= mysqli_query($conn,$sql);

//find the number of records

//associative array to fetch rows details in array format
//check code with harry #29

   
while($row= mysqli_fetch_assoc($result))
{
  if(!$_SESSION['user']==NULL)
  {
if(($_SESSION['user'])==$row['username'])//if the variable is set then it will show else it will ask to log in
{
header("Location:aditya.php");

}
  }


}

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

    <h2>KGPconnect</h2>

    <p>Log In To Proceed</p>

  </div>

  <div class="group">

    <label for="username">Email or Username</label><br>

    <input type="text" name="username" id="username" required>

  </div>

  <div class="group">

    <label for="pass">Password</label><br>

    <input type="password" name="pass" id="pass" required>

    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>

  </div>

  <div class="group forgot-pass-link">

    <a href="#">Forget Password?</a>

  </div>

  <div class="group">

    <button type="submit"><span>Login</span></button>

  </div>

  <div class="group sign-up-link">

    <p>New User? <a href="signup.php">Signup</a></p>

  </div>

</form>

</div>
</body>
</html>