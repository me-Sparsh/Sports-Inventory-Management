<?php
require 'config1.php';
$result = 0;
if(isset($_POST["submit"])){
    $student_name1 = $_POST['student_name'];
    $student_id1 = $_POST['student_id'];
    $quantity1 = $_POST['quantity'];  
    $item_name1 = $_POST['item_name'];
    $phone_number1 = $_POST['phone_number'];
    $result = mysqli_query($conn,"INSERT INTO isssues VALUES ('$item_name1', '$student_name1', '$student_id1', '$quantity1', '$phone_number1')");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style>
      html{
            background-image: url("chairs.jpg");
            background-repeat: none;
            background-size:cover;
            background-position:center;
            background-attachment:fixed;
            
      }
      h1{
        color: white;
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
      #sub{
        width: 70px;
        height: 25px;
        margin-left: auto;
        margin-right: auto;
      }
      #res{
        color: white;
        font-size: 20px;
      }

    </style>
  </head>
  <body>
  <center><h1>STUDENT BOOKING</h1></center>
    <form class="block" action="" method="post" autocomplete="off">
      <b><center>ENTER YOUR DETAILS</center></b><br>
        <input type="text" name="student_name" id="student_name" placeholder="NAME OF THE STUDENT" /><br>
        <input type="number" name="student_id" id="student_id" placeholder="ID OF THE STUDENT" /><br>
        <input type="number" name="quantity" id="quantity" placeholder="QUANTITY OF THE REQUIRED ITEM" /><br>
        <input type="text" name="item_name" id="item_name" placeholder="NAME OF THE ITEM" /><br>
        <input type="number" name="phone_number" id="phone_number" placeholder="PHONE NUMBER OF THE STUDENT" /><br>
        <button type="submit" name="submit" id="sub">BOOK</button>
    </form>
    <?php
    if($result){
        echo "<script> alert('Issue request sent'); </script>";
    }
    ?>
    <br>
    <center><button><a href="index1.php">Main page</a></button></center>
</body>
</html>