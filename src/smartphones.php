<?php
include 'connectdb.php';
$sql = "SELECT * FROM article";
$result = $connection->query($sql);

if (!$result){
  echo "invalid q";
}
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

<div class="ml-auto mr-auto flex flex-col pt-10 max-w-[1200px]">
  <div class="max">
  <h2 class="text-4xl font-bold">Nos Smartphones.</h2>
  <p class="text-lg font-normal text-gray-500">iPhone, Samsung, Xiaomi, OPPO, Huawei… Nous espérons que vous trouverez votre bonheur parmi les dizaines de smartphones que nous avons sélectionnés au sein des plus grandes marques.</p>
  </div>

<div class="grid py-12 grid-cols-4 gap-10 max-w-[1200px]">
<?php

while($row = $result->fetch_assoc()){
  echo "<a href='produit.php?id=" . $row["id"] . "'>
    <div class='w-60 h-80 rounded-lg bg-gray-50 drop-shadow-lg flex flex-col justify-center'>
     <div class='mr-auto ml-auto mt-2'>
       <img class='aspect-auto w-48' src=" . $row["repimage"] . " alt=''>
     </div>
     <dir class='flex flex-col pl-5 pr-5'>
       <div>
         <h3>" . $row["libele"] . "</h3>
       </div>
       <div>
         <h3 class='text-2xl font-semibold'>" . $row["prixu"] . " €" ."</h3>
       </div>
     </dir> 
   </div>
   </a>";

}

?>

</div>
</div>

<?php
include 'footer.php';
?>

</body>
</html>