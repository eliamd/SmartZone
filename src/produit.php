<?php
include 'connectdb.php';

$queryss = $_GET["id"];

$sql = ("SELECT * FROM article WHERE id LIKE " . $queryss . ";");
$result = $connection->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../dist/output.css" rel="stylesheet">
    <title>Amahzone</title>
    <link href="../content/img/favicon.ico" rel="icon" type="image/x-icon" />
</head>
<body>


<?php
include 'navbar.php';
?>

<?php
while($row = $result->fetch_assoc()){
  echo "<section>
    <div class=''>
      <div class='mr-auto ml-auto  max-w-[1000px] bg-gray-5 flex'>
        <div class='mr-auto ml-auto'>
          <img class='max-w-full h-auto' src=" . $row["repimage"] . " alt='image description'>
        </div>
        <div class='mr-auto'>
        <div>
        <h1>" . $row["marque"] . "</h1>
      </div>
          <div>
            <h1>" . $row["libele"] . "</h1>
          </div>
          <div>
            <p>" . $row["description"] . "</p>
          </div>
          <div>
          <p>Couleur : " . $row["color"] . "</p>
        </div>
        <div>
        <p>Capacité : " . $row["spce_data"] . " Go</p>
      </div>
          <div>
            <h2>" . $row["prixu"] . " €" ."</h2>
          </div>
        </div>
      </div>
    </div>  
  </section>";
}
?>

<?php
include 'footer.php';
?>

</body>
</html>