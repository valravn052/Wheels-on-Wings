<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Trek SLR-7</title>
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


    <br><br><br><br><br><br><br>

<div align="center">
    <form action="dbpeak.php">
        <table border="1">
            <tr>
                <img src="images/dbpeak.jpg">
            </tr>
            
            <tr>
              <td><label>Gears</label></td>
                <td>
                    <?php
                    $mysqli = new mysqli('localhost', 'root', '', 'wow_10');

                    $resultSet = $mysqli->query("SELECT DISTINCT gears FROM bikes WHERE bike_name = 'SLR-7'");
                    ?>

                        <?php
                        while ($rows = $resultSet->fetch_assoc()) {
                            $gears = $rows['gears'];
                            echo "<option value = '$gears'>$gears</option>";
                        }
                        ?>
                </td>
            </tr>

            <tr>
              <td><label>Frames</label></td>
                <td>
                    <?php
                    $mysqli = new mysqli('localhost', 'root', '', 'wow_10');

                    $resultSet = $mysqli->query("SELECT DISTINCT frames FROM bikes WHERE bike_name = 'SLR-7'");
                    ?>

                        <?php
                        while ($rows = $resultSet->fetch_assoc()) {
                            $frames = $rows['frames'];
                            echo "<option value = '$frames'>$frames</option>";
                        }
                        ?>
                </td>
            </tr>

            <tr>
              <td><label>Wheels</label></td>
                <td>
                    <?php
                    $mysqli = new mysqli('localhost', 'root', '', 'wow_10');

                    $resultSet = $mysqli->query("SELECT DISTINCT wheels FROM bikes WHERE bike_name = 'SLR-7'");
                    ?>

                        <?php
                        while ($rows = $resultSet->fetch_assoc()) {
                            $wheels = $rows['wheels'];
                            echo "<option value = '$wheels'>$wheels</option>";
                        }
                        ?>
                </td>
            </tr>

            <tr>
              <td><label>Brakes</label></td>
                <td>
                    <?php
                    $mysqli = new mysqli('localhost', 'root', '', 'wow_10');

                    $resultSet = $mysqli->query("SELECT DISTINCT brakes FROM bikes WHERE bike_name = 'SLR-7'");
                    ?>

                        <?php
                        while ($rows = $resultSet->fetch_assoc()) {
                            $brakes = $rows['brakes'];
                            echo "<option value = '$brakes'>$brakes</option>";
                        }
                        ?>
                </td>
            </tr>
            
        </table>    

        <input type="submit" name="save" value="Buy Now" style="height: 30px; width: 100px;">
    </form><br><br>
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
