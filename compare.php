<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: center;
  padding: 16px;
}

th:first-child, td:first-child {
  text-align: left;
}

tr:nth-child(even) {
  background-color: #f2f2f2
}

.fa-check {
  color: green;
}

.fa-remove {
  color: red;
}
</style>
</head>
<body>

<h2>Comparison Table</h2>

<form action="" method="post">
<table>
  <tr>
    <th style="width:50%">Features</th>
    <th>
      <?php
      $mysqli = new mysqli('localhost', 'root', '', 'wow_10');

      $resultSet = $mysqli->query("SELECT bike_name FROM bikes");
      ?>
      
      <select name="bikes">
          <?php
          while ($rows = $resultSet->fetch_assoc()) {
              $bike_name = $rows['bike_name'];
              echo "<option value = '$bike_name'>$bike_name</option>";
          }
          ?>
      </select>

    </th>
    <th>
      <?php
      $mysqli = new mysqli('localhost', 'root', '', 'wow_10');

      $resultSet = $mysqli->query("SELECT bike_name FROM bikes");
      ?>
      
      <select name="bikes">
          <?php
          while ($rows = $resultSet->fetch_assoc()) {
              $bike_name = $rows['bike_name'];
              echo "<option value = '$bike_name'>$bike_name</option>";
          }
          ?>
        </select>
    </th>
  </tr>
  <tr>
    <td>Gears</td>
    <td>
      <?php
      $mysqli = new mysqli('localhost', 'root', '', 'wow_10');

      $resultSet = $mysqli->query("SELECT gears FROM bikes");

      if(isset($_POST['submit'])){
        while ($rows = $resultSet->fetch_assoc()) {
        //$selected = $_POST['gears'];
        $gears = $rows['gears'];
        echo "<option value = '$gears'>$gears</option>";
      }
    }
      ?>

          
      <?php
      // while ($rows = $resultSet->fetch_assoc()) {
      //   $gears = $rows['gears'];
      //   echo "<option value = '$gears'>$gears</option>";
      // }
      ?>

      <?php
    // if(isset($_POST['submit'])){
    // if(!empty($_POST['gears'])) {
    //     $selected = $_POST['gears'];
    //     echo 'You have chosen: ' . $selected;
    // } else {
    //     echo 'Please select the value.';
    // }
    // }
?>

    </td>
    <td><i class="fa fa-check"></i></td>
  </tr>
  <tr>
    <td>Frames</td>
    <td><i class="fa fa-check"></i></td>
    <td><i class="fa fa-check"></i></td>
  </tr>
  <tr>
    <td>Wheels</td>
    <td><i class="fa fa-check"></i></td>
    <td><i class="fa fa-check"></i></td>
  </tr>
  <tr>
    <td>Brakes</td>
    <td><i class="fa fa-remove"></i></td>
    <td><i class="fa fa-check"></i></td>
  </tr>
</table>
<input type="submit" name="submit" value="submit">
</form>

<?php
    // if(isset($_POST['submit'])){
    // if(!empty($_POST['gears'])) {
    //     $selected = $_POST['gears'];
    //     echo 'You have chosen: ' . $selected;
    // } else {
    //     echo 'Please select the value.';
    // }
    // }
?>

</body>
</html>
