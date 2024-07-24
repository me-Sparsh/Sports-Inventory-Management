<?php
require 'config1.php';
$sql = "SELECT quantity, current, available, item_name FROM inventory";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Index</title>
    <style>
        html{
            background-image: url("https://manipal.edu/content/dam/manipal/mu/photos/HSTL%203.png");
            background-repeat: none;
            background-size:cover;
            background-position:center;
            background-attachment:fixed;
            
        }

        #top{
            color:black;
            padding: 30px;
            font-size: 50px;

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
        #heading{
            padding: 210px;
            text-align: center;
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
    </style>

    <div id="top">
		<a href="https://manipal.edu/mu/campuses/mahe-bengaluru.html"></a><img src="mahe2.jpg"></a>
		<hi id="heading">MAHE BLR Sports Room Inventory</hi>
		<button><a href="login.php">Admin</a></button>
        <button><a href="booking.php">Booking</a></button>

	</div>
</head>
<body>

    <?php
    if ($result->num_rows > 0) {
        echo "<table><tr><th>ITEM NAME</th><th>QUANTITY</th><th>CURRENT</th><th>AVAILABLE</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["item_name"]."</td><td>".$row["quantity"]."</td><td>".$row["current"]."</td><td>".$row["available"]."</td></tr>";
            
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    ?>

    </body>
    
</html>