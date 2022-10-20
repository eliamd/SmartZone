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

<div class="flex ml-[4%] mr-auto max-w-[1400px]"> 
<div class="pt-36 pr-24">
<form action="seach.php" method="get">
  <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">Marque</h3>
<ul class="w-48 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="list-marque1" type="radio" value="marque LIKE 'Apple' " name="marque" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="list-marque1" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Apple</label>
        </div>
    </li>
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="list-marque2" type="radio" value="marque LIKE 'RealMe' " name="marque" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="list-marque2" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">RealMe</label>
        </div>
    </li>
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="list-marque3" type="radio" value="marque LIKE 'Samsung' " name="marque" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="list-marque3" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Samsung</label>
        </div>
    </li>
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="list-marque4" type="radio" value="marque LIKE 'Razer' " name="marque" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="list-marque4" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Razer</label>
        </div>
    </li>
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
      <div class="flex items-center pl-3">
          <input id="list-marque6" type="radio" value="marque LIKE 'Oppo' " name="marque" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
          <label for="list-marque6" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Oppo</label>
      </div>
  </li>
  <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
    <div class="flex items-center pl-3">
        <input id="list-marque6" type="radio" value="marque LIKE 'Honor' " name="marque" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
        <label for="list-marque6" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Honor</label>
    </div>
</li>
<li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
  <div class="flex items-center pl-3">
      <input id="list-marque6" type="radio" value="marque LIKE 'CrossaCall' " name="marque" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
      <label for="list-marque6" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">CrossaCall</label>
  </div>
</li>
</ul>
<h3 class="mb-4 pt-4 font-semibold text-gray-900 dark:text-white">Couleur</h3>
<ul class="w-48 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="list-couleur1" type="radio" value="AND color LIKE 'Noir' " name="couleur" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="list-couleur1" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Noir</label>
        </div>
    </li>
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="list-couleur2" type="radio" value="AND color LIKE 'Bleu' " name="couleur" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="list-couleur2" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Bleu</label>
        </div>
    </li>
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="list-couleur3" type="radio" value="AND color LIKE 'Vert' " name="couleur" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="list-couleur3" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Vert</label>
        </div>
    </li>
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="list-couleur4" type="radio" value="AND color LIKE 'Gris' " name="couleur" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="list-couleur4" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Gris</label>
        </div>
    </li>
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
      <div class="flex items-center pl-3">
          <input id="list-couleur5" type="radio" value="AND color LIKE 'Rouge' " name="couleur" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
          <label for="list-couleur5" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Rouge</label>
      </div>
  </li>
</ul>
<h3 class="mb-4 pt-4 font-semibold text-gray-900 dark:text-white">Capacité</h3>
<ul class="w-48 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="list-radio-license" type="radio" value=" AND spce_data LIKE '32'" name="size" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="list-radio-license" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">32 Go</label>
        </div>
    </li>
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="list-radio-id" type="radio" value=" AND spce_data LIKE '64'" name="size" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="list-radio-id" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">64 Go</label>
        </div>
    </li>
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="list-radio-millitary" type="radio" value=" AND spce_data LIKE '128'" name="size" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="list-radio-millitary" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">128 Go</label>
        </div>
    </li>
    <li class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">
        <div class="flex items-center pl-3">
            <input id="list-radio-passport" type="radio" value=" AND spce_data LIKE '256'" name="size" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            <label for="list-radio-passport" class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">256 Go</label>
        </div>
    </li>
</ul>
<button type="submit" class="text-white bg-orange-600 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 focus:outline-none">Valider</button>
<button type="reset" class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200">Reset</button>
</form>

</div>
<div>
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
        <h3>" . $row["marque"] . " " . $row["libele"] . " (" . $row["spce_data"] . " Go) - " . $row["color"] . "</h3>
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
</div>
</div>

<?php
include 'footer.php';
?>

</body>
</html>