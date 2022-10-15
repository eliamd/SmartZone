<?php
include 'connectdb.php';

$queryss = $_GET["query"];

$sql = ("SELECT * FROM article WHERE libele LIKE '%" . $queryss . "%';");
$result = $connection->query($sql);

$sql2 = ("SELECT COUNT(*) FROM article WHERE libele LIKE '%" . $queryss . "%';");
$result2 = $connection->query($sql2);


while($rrr = $result2->fetch_assoc()){ 
  $num = $rrr['COUNT(*)'];
  $int = (int)$num;
  $float = (float)$num;

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

<?php
if($float != 0){
  echo "<div class='ml-auto mr-auto flex flex-col pt-10 max-w-[1200px]'>
  <div class='ml-auto mr-auto flex flex-col pt-10 min-h-[750px] max-w-[1200px]'>
  <div class='max'>
  <h2 class='text-4xl font-bold'>Recherche.</h2>
  <p class='text-lg font-normal text-gray-500 :uppercase'>Pour  ' " . $_GET["query"] . " ' vous obtenez " .  $float . " résultats.</p>


  <div class='grid py-12 grid-cols-4 gap-10 max-w-[1200px]'>


  ";


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
};

}else{

echo "

<section class='bg-white min-h-[750px]'>
    <div class='px-4 mx-auto max-w-screen-xl'>
        <div class='mx-auto max-w-screen-sm pt-[20%] text-center'>
            <h1 class='mb-4 text-7xl tracking-tight font-extrabold text-primary-600 '>Aucun résultat</h1>
            <p class='mb-4 text-lg font-light text-gray-500'>On a cherché partout : le produit que vous désirez n'existe pas sur notre plate-forme. Essayez autre chose ou allez voir nos autres smartphones.</p>
            <a href='smartphones.php' class='inline-flex text-white bg-orange-500 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center my-4'>Retourner aux smartphones</a>
        </div>   
    </div>
</section>

";

}
?>

</div>
</div>
</div>
</div>

<?php
include 'footer.php';
?>

</body>
</html>