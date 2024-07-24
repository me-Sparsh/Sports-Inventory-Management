<?php
require 'config1.php';
if(!empty($_SESSION["id"])){
  header("Location: update1.php");
}
if(isset($_POST["submit"])){
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM regi WHERE username = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: update1.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <style>
      h1{
        color: #ffffff;
      }
      a{
        text-align: center;
      }
      input
      {
        padding: 5px;
      } 
      form {
        font-family: arial;
        box-sizing: border-box;
        padding: 15px;
        border-radius: 10px;
        background-color: rgb(204, 174, 138);
        border: 4px solid hsl(0, 0%, 90%);
        display: grid;
        width: 350px;
        color: white;
      }
      form.block {
        margin-left: auto;
        margin-right: auto;
      }
      body{
        background-image: url('track.jpg');
        background-size: 100%;
        background-repeat: no-repeat;
        background-attachment: fixed;
      }
      #sub {
        width: 90px;
        height: 25px;
        margin-left: auto;
        margin-right: auto;
      }
      #mp{
        width: 90px;
        height: 25px;
        margin-left: auto;
        margin-right: auto;        
      }
    </style>
  </head>
  <body>
    <h1><center>SPORTS UTILITY MANAGEMENT</center></h1>
    <form class="block" action="" method="post" autocomplete="off">
      <b><center>USERNAME</center></b>
      <input type="text" name="usernameemail" id = "usernameemail" required value="">
      <b><center>PASSWORD</center></b>
      <input type="password" name="password" id = "password" required value=""> <br>
      <br>
      <br>
      <button type="submit" name="submit" id="sub">Login</button>
      <br>  
    </form>
    <center><button><a href="logout.php">Main page</a></button></center>

    <br>
  </body>
</html>