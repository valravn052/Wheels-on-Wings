<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Fixie</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	<div class="container">
		<div class="header2">
			<img src="images/wow.png" class="logo1">
			<font size="+4" style="">
  			<h1>Wheels On Wings</h1>
  		</font>
		</div>
		

    <div class="menu">
	    <ul>
	        <li><a href="homepage.php">Homepage</a></li>
            <li><a href="">Bikes</a></li>
            <li><a href="accessories.php">Accessories</a></li>
            <li><a href="">Rental</a></li>
            <li><a href="">Servicing</a></li>
            <li><a href="build.php">Build</a></li>
            <li><a href="">Buy-Sell</a></li>
            <li><a href="">Logout</a></li>
        </ul>
    </div>

    <br><br><br><br><br>

    <div align="center">
	<form action="fixie.php">
		<table border="1">
			<tr>
				<td colspan="2" align="center"><label>Fixie Bikes</label></td>
			</tr>
			<tr>
				<td><a href="rharper.php" style="color: black;">Retrospec Harper</a></td>
				<td>
					<?php
					$mysqli = new mysqli('localhost', 'root', '', 'wow_10');

					$resultSet2 = $mysqli->query("SELECT bike_price FROM bikes WHERE bike_name = 'Harper'");
					?>

					<?php
						while ($rows = $resultSet2->fetch_assoc()) {
							$bike_price = $rows['bike_price'];
							echo "<option value = '$bike_price'>$bike_price</option>";
						}
						?>

					
				</td>
			</tr>

			<tr>
				<td><a href="fpixel.php" style="color: black;">Fyxation Pixel</a></td>
				<td>
					<?php
					$mysqli = new mysqli('localhost', 'root', '', 'wow_10');

					$resultSet2 = $mysqli->query("SELECT bike_price FROM bikes WHERE bike_name = 'Pixel'");
					?>

					<?php
						while ($rows = $resultSet2->fetch_assoc()) {
							$bike_price = $rows['bike_price'];
							echo "<option value = '$bike_price'>$bike_price</option>";
						}
						?>

					
				</td>
			</tr>

			<tr>
				<td><a href="wlight.php" style="color: black;">Wabi Lightning</a></td>
				<td>
					<?php
					$mysqli = new mysqli('localhost', 'root', '', 'wow_10');

					$resultSet2 = $mysqli->query("SELECT bike_price FROM bikes WHERE bike_name = 'Lightning'");
					?>

					
					<?php
						while ($rows = $resultSet2->fetch_assoc()) {
							$bike_price = $rows['bike_price'];
							echo "<option value = '$bike_price'>$bike_price</option>";
						}
						?>
					
				</td>
			</tr>
		</table>	
</div>



	</div>
</div>


<div class = "footer">
    <address>
        Location : Mohammadpur, Dhaka<br>
        Contact : 0323248674
    </address>
</div>

</body>
</html>
