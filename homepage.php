<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>WOW</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	<div class="container">
		<div class="header2">
			<img src="images/wow.png" class="logo1">
			<font size="+1" style="">
  			<h1>Wheels On Wings</h1>
  		</font>
		</div>
		
	
    <div class="header">
        <div class="navbar">
            <div class="logo">
	           <img src="images/bicycle2.jpg" width="100%" height="100%">
           </div>

    <div class="menu">
	    <ul>
	        <li><a href="homepage.php">Homepage</a></li>
            <li><a href="bikes.php">Bikes</a></li>
            <li><a href="accessories.php">Accessories</a></li>
            <li><a href="">Rental</a></li>
            <li><a href="">Servicing</a></li>
            <li><a href="build.php">Build</a></li>
            <li><a href="">Buy-Sell</a></li>
            <li><a href="logout.php">Logout</a></li>
            <li><br>
              <form method="post">
                <label>Search</label>
                <input type="text" name="search">
                <input type="submit" name="submit">
  
              </form>
            </li>
        </ul>
    </div>
</div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="mtb.php">
      <img src="images/MTB.jpg" width="100%" height="100%">
    </a>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="bmx.php">
      <img src="images/bmx.jpg" width="100%" height="287">
    </a>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="rb.php">
      <img src="images/RB.jpg" width="100%" height="100%">
    </a>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="fixie.php">
      <img src="images/fixie.jpg" width="100%" height="287">
    </a>
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



<?php

$con = new PDO("mysql:host=localhost;dbname=wow_10",'root','');

if (isset($_POST["submit"])) {
  $str = $_POST["search"];
  $sth = $con->prepare("SELECT * FROM bikes WHERE bike_brand = '$str' or bike_name = '$str' or bike_type = '$str'");

  $sth->setFetchMode(PDO:: FETCH_OBJ);
  $sth -> execute();
  
  while($row = $sth->fetch())
  {
    if ($row != " ") {
    
    ?>

    <br><br><br>
    <table>
      <tr>
        <th>Brand</th>
        <th>Name</th>
      </tr>
      <tr>
        <td><?php echo $row->bike_brand; ?></td>
        <td><?php echo $row->bike_name;?></td>
      </tr>

    </table>

<?php 
  }

    
    
    else{
      echo "Name Does not exist";
    }
  }
}




?>
