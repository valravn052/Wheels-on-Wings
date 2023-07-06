<?php
    session_start();
    $database_name = "wow_10";
    $con = mysqli_connect("localhost","root","",$database_name);

    if (isset($_POST["add"])){
        if (isset($_SESSION["cart"])){
            $item_array_id = array_column($_SESSION["cart"],"ew2222222222222222222222222222222222222222222222222222222222222wid");
            if (!in_array($_GET["id"],$item_array_id)){
                $count = count($_SESSION["cart"]);
                $item_array = array(
                    'product_id' => $_GET["id"],
                    'item_name' => $_POST["hidden_name"],
                    'product_price' => $_POST["hidden_price"],
                    'item_quantity' => $_POST["quantity"],
                );
                $_SESSION["cart"][$count] = $item_array;
                echo '<script>window.location="atx.php"</script>';
            }else{
                echo '<script>alert("Product is already Added to Cart")</script>';
                echo '<script>window.location="atx.php"</script>';
            }
        }else{
            $item_array = array(
                'product_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"],
            );
            $_SESSION["cart"][0] = $item_array;
        }
    }

    if (isset($_GET["action"])){
        if ($_GET["action"] == "delete"){
            foreach ($_SESSION["cart"] as $keys => $value){
                if ($value["product_id"] == $_GET["id"]){
                    unset($_SESSION["cart"][$keys]);
                    echo '<script>alert("Product has been Removed...!")</script>';
                    echo '<script>window.location="atx.php"</script>';
                }
            }
        }
    }
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Giant ATX</title>
    <link rel="stylesheet" type="text/css" href="style1.css">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Titillium+Web');

        *{
            font-family: sans-serif;
        }
        .product{
            border: 1px solid #eaeaec;
            margin: -1px 19px 3px -1px;
            padding: 10px;
            text-align: center;
            background-color: #efefef;
        }
        table {
          border-collapse: collapse;
          border-spacing: 0;
          width: 100%;
          border: 1px solid #ddd;
        }
        table, th, tr{
            text-align: center;
        }
        .title2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        h2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        table th{
            background-color: #efefef;
        }
    </style>
</head>
<body>

    <div class="container1">
        <div class="header2">
            <img src="images/wow.png" class="logo1">
            <font size="+1" style="">
            <h1>Wheels On Wings</h1>
        </font>
        </div>
        

    <div class="menu">
        <ul>
            <li><a href="homepage.php">Homepage</a></li>
            <li><a href="atx.php">Bikes</a></li>
            <li><a href="accessories.php">Accessories</a></li>
            <li><a href="">Rental</a></li>
            <li><a href="">Servicing</a></li>
            <li><a href="build.php">Build</a></li>
            <li><a href="">Buy-Sell</a></li>
            <li><a href="">Logout</a></li>
        </ul>
    </div>

    <br><br><br>

    

    <div class="container" style="width: 65%">
        <h2>Giant ATX</h2>

        <div align="center">
    <form action="atx.php">
        <table border="1" style="width = 50%">
            <tr>
                <img src="images/atx.jpg">
            </tr>
            
            <tr>
              <td><label>Gears</label></td>
                <td>
                    <?php
                    $mysqli = new mysqli('localhost', 'root', '', 'wow_10');

                    $resultSet = $mysqli->query("SELECT DISTINCT gears FROM bikes WHERE bike_name = 'Peak'");
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

                    $resultSet = $mysqli->query("SELECT DISTINCT frames FROM bikes WHERE bike_name = 'Peak'");
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

                    $resultSet = $mysqli->query("SELECT DISTINCT wheels FROM bikes WHERE bike_name = 'Peak'");
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

                    $resultSet = $mysqli->query("SELECT DISTINCT brakes FROM bikes WHERE bike_name = 'Peak'");
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

    </form><br><br>
</div>

        <?php
            $query = "SELECT * FROM bikes WHERE bike_name = 'Peak'";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)) {

                    ?>
                    <div class="col-md-3">

                        <form method="post" action="atx.php?action=add&id=<?php echo $row["bike_id"]; ?>">

                            <div class="cart">
                                <!--img src="<?php //echo $row["image"]; ?>" class="img-responsive"-->

                                <h4 class="text-danger"><?php echo $row["bike_price"]; ?></h4>
                                <input type="text" name="quantity" class="form-control" value="1">
                                <input type="hidden" name="hidden_name" value="<?php echo $row["bike_name"]; ?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["bike_price"]; ?>">
                                <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success"
                                       value="Add to Cart">
                            </div>
                        </form>
                    </div>
                    <?php
                }
            }
        ?>

        <div style="clear: both"></div>
        <h3 class="title2">Shopping Cart Details</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <th width="30%">Product Name</th>
                <th width="10%">Quantity</th>
                <th width="13%">Price Details</th>
                <th width="10%">Total Price</th>
                <th width="17%">Remove Item</th>
            </tr>

            <?php
                if(!empty($_SESSION["cart"])){
                    $total = 0;
                    foreach ($_SESSION["cart"] as $key => $value) {
                        ?>
                        <tr>
                            <td><?php echo $value["item_name"]; ?></td>
                            <td><?php echo $value["item_quantity"]; ?></td>
                            <td>$ <?php echo $value["product_price"]; ?></td>
                            <td>
                                $ <?php echo number_format($value["item_quantity"] * $value["product_price"], 3); ?></td>
                            <td><a href="atx.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span
                                        class="text-danger">Remove Item</span></a></td>

                        </tr>
                        <?php
                        $totalcheckout = $totalcheckout + ($value["item_quantity"] * $value["product_price"]);
                    }
                        ?>
                        <tr>
                            <td colspan="3" align="right">Total</td>
                            <th align="right">$ <?php echo number_format($totalcheckout, 3); ?></th>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="4" align="right">
                                <a href="checkout.php?price=<?php echo $totalcheckout ?>"><span class="text-danger">Checkout</span></a>
                            </td>
                        </tr>
                        <?php
                    }
                ?>
            </table>
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