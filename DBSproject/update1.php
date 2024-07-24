<?php
require 'config1.php';
if(isset($_POST["submit"])){
    $result = 0;
    $result1 = 0;
    $available2 = 1;
    $item_name2 = $_POST['item_name'];
    $item_id2 = $_POST['item_id'];
    $quantity2 = $_POST['quantity'];  
    $sport2 = $_POST['sport'];
    $cost2 = $_POST['cost'];
    $result = mysqli_query($conn,"INSERT INTO inventory VALUES ('$quantity2', '$quantity2', '$available2', '$item_name2')");
    $result2 = mysqli_query($conn,"INSERT INTO item VALUES ('$item_id2', '$item_name2', '$sport2', '$cost2')");
    if($result && $result2){
        echo "<script> alert('Item added'); </script>";
    }
    else{
        echo "<script> alert('Item not added'); </script>";
    }

    }
    if(isset($_POST["submit1"])){
        $result = 0;
        $result1 = 0;
        $item_name3 = $_POST['item_name4'];
        $quantity3 = $_POST['quantity4'];
        $available3 = $_POST['available4'];
        $current3 = $_POST['current4'];
        $result = mysqli_query($conn,"UPDATE inventory SET quantity='$quantity3' , available='$available3', current='$current3' WHERE item_name='$item_name3';");
        if($result){
            echo "<script> alert('Data updated'); </script>";
        }
        else{
            echo "<script> alert('Data not updated'); </script>";
        }

    }
    if(isset($_POST["submit2"])){
        $result = 0;
        $result1 = 0;
        $item_name6 = $_POST['item_name5'];
        $item_id6 = $_POST['item_id5'];
        $result = mysqli_query($conn, "DELETE FROM item WHERE (name='$item_name6' AND item_id='$item_id6');");
        $result1 = mysqli_query($conn, "DELETE FROM inventory WHERE item_name='$item_name6';");
        echo "<script> alert('Item deleted'); </script>";
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
      #sub {
        width: 70px;
        height: 25px;
        margin-left: auto;
        margin-right: auto;
      }
      #upd{
        width: 70px;
        height: 25px;
        margin-left: auto;
        margin-right: auto;        
      }
      #del{
        width: 70px;
        height: 25px;
        margin-left: auto;
        margin-right: auto;        
      }
    </style>


</head>
  <body>
    <h1><center>Admin Table Update</center></h1>
    

    <form class="block"  action="" method="post" autocomplete="off">
        <b><center>ADD NEW ITEM TYPE</center></b>
        <input type="text" name="item_name" id="item_name" placeholder="NAME OF THE ITEM" /><br>
        <input type="number" name="item_id" id="item_id" placeholder="ID OF THE ITEM" /><br>
        <input type="number" name="quantity" id="quantity" placeholder="TOTAL QUANTITY OF THE ITEM" /><br>
        <input type="text" name="sport" id="sport" placeholder="WHICH SPORT IT BELONGS TO?" /><br>
        <input type="number" name="cost" id="cost" placeholder="COST OF THE ITEM" /><br>
      <button type="submit" name="submit" id="sub">ADD</button>
    </form>
    <br>
    <br>
    <br>
    <form class="block" action="" method="post" autocomplete="off">
        <b><center>UPDATE THE NUMBER OF ITEMS :</center></b>
        <input type="text" name="item_name4" id="item_name4" placeholder="NAME OF THE ITEM" /><br>
        <input type="number" name="quantity4" id="quantity4" placeholder="QUANTITY TO BE CHANGED" /><br>
        <input type="number" name="current4" id="current4" placeholder="CURRENT NUMBER OF ITEMS" /><br>
        <input type="number" name="available4" id="available4" placeholder="AVAILABILITY OF THE ITEM" /><br>
      <button type="submit" name="submit1" id="upd">UPDATE</button>
    </form>
    <br>
    <br>
    <br>   
    <form class="block"  action="" method="post" autocomplete="off">
        <b><center>DELETE A ENTRY</center></b>
        <input type="text" name="item_name5" id="item_name5" placeholder="NAME OF THE ITEM" /><br>
        <input type="number" name="item_id5" id="item_id5" placeholder="ID OF THE ITEM" /><br>
        <button type="submit" name="submit2" id="del">DELETE</button>
    </form>
    <br>
    <br>
    <center><button><a href="adminbooking.php">Booking View</a></button></center>
    <center><button><a href="logout.php">Main page</a></button></center>
  </body>
</html>