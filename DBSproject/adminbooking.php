<?php
require 'config1.php';
$sql = "SELECT item_name, student_name, student_id, quantity1, phone_number FROM isssues";
$result = $conn->query($sql);
if(isset($_POST["submit2"])){
    $result1 = 0;
    $student_name3 = $_POST['student_name2'];
    $student_id3 = $_POST['student_id2'];
    $result1 = mysqli_query($conn, "DELETE FROM isssues WHERE (student_name='$student_name3' AND student_id='$student_id3')");
    echo "<script> alert('Entry deleted'); </script>";
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ADMIN BOOKING</title>
    <style>
        html{
            background-image: url("mitblur.jpg");
            background-repeat: none;
            background-size:cover;
            background-position:center;
            background-attachment:fixed;
            
        }
        table{
            font-family: arial;
            border-collapse: collapse;
            width: 100%;
            border-radius: 50px;
        }
        td,th{
            border: 2px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        tr:nth-child(even) {background: rgba(242,242,242,0.7);}
        tr:nth-child(odd)  {background: rgba(255,255,255,0.7);}
        tr{
            padding: 20px;
            text-align: center;

        }
        th {
            background-color: rgb(204, 174, 138);
            color: white;
            padding: 20px;
            text-align: center;
        }
        #top{
            text-align: right;
            color:black;
            padding-bottom: 20px;
            padding-top: 0px;
        }
        .flex-container {
        display: flex;
        justify-content: flex-end;
        }
        #heading {
            font-size: 20px;
            padding-bottom: 0px;
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
        #del {
            width: 70px;
            height: 25px;
            margin-left: auto;
            margin-right: auto;
        }

    </style>
  </head>
  <body>
  
  <div id="heading">
  <center><h1>ADMIN BOOKING VIEW </h1></center></div>
    <div class="flex-container">
  <div id="top">      
    <button><a href="update1.php">Admin page</a></button>
    <button><a href="index1.php">Main page</a></button>
    </div>
    </div> 
    <?php
    if ($result->num_rows > 0) {
        echo "<table><tr><th>STUDENT NAME</th><th>STUDENT ID</th><th>ITEM NAME</th><th>QUANTITY</th><th>PHONE_NUMBER</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["student_name"]."</td><td>".$row["student_id"]."</td><td>".$row["item_name"]."</td><td>".$row["quantity1"]."</td><td>".$row["phone_number"]."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    ?>
    <br>
    <br>
    <form class="block" action="" method="post" autocomplete="off">
        <b><center>DELETE AN ENTRY</center></b><br><br>
        <input type="text" name="student_name2" id="student_name2" placeholder="ENTER STUDENT NAME" /><br>
        <input type="number" name="student_id2" id="student_id2" placeholder="ENTER STUDENT ID" /><br>
        <button type="submit" name="submit2" id="del">DELETE</button>
    </form>

    </body>
    </html>