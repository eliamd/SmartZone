<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "amahzone";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `article` WHERE 1";
$result = $conn->query($sql);

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php 
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "id: " . $row["id"]. " - Name: " . $row["libele"]. " " . $row["description"]. " " .  $row["prixttc"]. " " . $row["repimage"]. "<br>";
        }
      } else {
        echo "0 results";
      }
    
    ?>
</h1>
</body>
</html>