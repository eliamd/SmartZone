<?php
include 'connectdb.php';

$queryss = $_GET["id"];

$result = $bdd->query("SELECT * FROM article WHERE id LIKE " . $queryss . ";");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../dist/output.css" rel="stylesheet">
    <title>SmartZone</title>
    <link href="../content/img/favicon.ico" rel="icon" type="image/x-icon" />
</head>
<body>



<?php
include 'navbar.php';
?>

<?php
while($row = $result->fetch()){
  echo "
  


  <section class=''>
    <div class='pt-& mr-auto ml-auto w-fit'>

    <nav class='flex pl-2 pt-2 ' aria-label='Breadcrumb'>
    <ol class='inline-flex items-center space-x-1 md:space-x-3'>
      <li class='inline-flex items-center'>
        <a href='accueil.php' class='inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 '>
          <svg class='w-4 h-4 mr-2' fill='currentColor' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'><path d='M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z'></path></svg>
          Accueil
        </a>
      </li>
      <li>
        <div class='flex items-center'>
          <svg class='w-6 h-6 text-gray-400' fill='currentColor' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'><path fill-rule='evenodd' d='M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z' clip-rule='evenodd'></path></svg>
          <a href='smartphones.php' class='ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 '>Smartphones</a>
        </div>
      </li>
      <li aria-current='page'>
        <div class='flex items-center'>
          <svg class='w-6 h-6 text-gray-400' fill='currentColor' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'><path fill-rule='evenodd' d='M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z' clip-rule='evenodd'></path></svg>
          <span class='ml-1 text-sm font-medium text-gray-500 md:ml-2'>" . $row["marque"] . " " . $row["libele"] . "</span>
        </div>
      </li>
    </ol>
    </nav>
      <div class=' py-20 flex justify-center'>
          <div class=''>
            <img id='imagetel' src=" . $row["repimage"] . " alt='image description'>
          </div>
          <div class='max-w-sm'>
            <div>
              <h1 id='pdrid' class=' text-xl pt-2 font-bold hidden'>" . $row["id"] . "</h1>
            </div>
            <div>
              <h1 id='prdmarque' class=' text-xl pt-2 font-bold'>" . $row["marque"] . "</h1>
            </div>
            <div>
              <h1 id='prdlibele' class='produit text-2xl font-bold'>" . $row["libele"] . "</h1>
           </div>
           <div>
            <p class='max-w-sm text-left'>" . $row["description"] . "</p>
          </div>
          <hr class='my-3 h-px bg-gray-200 border-0'>
          <div class='flex flex-wrap gap-x-2'>
          <p id='prdcouleur' class='py-2 px-3 bg-gray-200 text-center border border-gray-400 rounded-2xl w-fit my-2'>Couleur : " . $row["color"] . "</p>
          <p class='py-2 px-3 bg-gray-200 text-center border border-gray-400 rounded-2xl w-fit my-2'>Capacité : " . $row["spce_data"] . " Go</p>
          <p class='py-2 px-3 bg-gray-200 text-center border border-gray-400 rounded-2xl w-fit my-2'>Garantie 24 mois</p>
          ";if($row["5G"] == 1){
            echo"<p class='py-2 px-3 bg-gray-200 text-center border border-gray-400 rounded-2xl w-fit my-2'>Compatible 5G</p>";
          }else{
          }; echo "
          </div>
          <div>
            <h2 id='prdprix' class='text-4xl font-black'>" . $row["prixu"] . " €" ."</h2>
            <p class='text-sm'>0.02€ d'éco-part.</p>
          </div>
          <button type='button' class='addpanier text-white bg-orange-500 hover:bg-orange-700 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg  px-5 py-2.5 my-2 text-center inline-flex items-center mr-2'>
            <svg aria-hidden='true' class='mr-2 -ml-1 w-5 h-5' fill='currentColor' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'><path d='M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z'></path></svg>
            Ajouter au panier
          </button>
        </div>
      </div>
    </div>  

<div class='m-auto w-fit max-w-6xl'>
  ";if($row["5G"] == 1){
    echo"
    <hr class='my-8 h-px bg-gray-200 border-0'>
    <div>
      <div class='flex justify-around'>
      <img class='max-w-[25%] h-auto' src='../content/img/5g.png'>
      <div class='mt-auto mb-auto w-[50%]'>
        <h2 class='pt-4 text-3xl font-extrabold'>Votre allié pour la 5G</h2>
        <p class=' text-lg font-normal'>Utilisable sur les réseaux actuels (3G, 4G, 4G+), ce mobile est également prêt à accueillir la 5G. Vous pourrez pleinement profiter des performances de ce nouveau réseau : plus de débit, plus de réactivité. Et dans les années à venir, la 5G c’est aussi la promesse de nombreux services qui vont révolutionner nos façons de communiquer, vivre, travailler… Ce mobile sera votre meilleur allié pour en bénéficier !</p>
      </div>
    </div>
    ";
  }else{
  }; echo "
  <hr class='my-8 h-px bg-gray-200 border-0'>
  <div class='my-8'>
    <h2 class='pt-4 text-3xl font-extrabold'>Garantie légale de conformité de 2 ans</h2>
    <p class='mb-4 text-lg font-normal'>Elle vous permet d’obtenir pendant les 2 ans suivant sa délivrance, la réparation ou l’échange de votre produit (y compris les éléments numériques qui y sont intégrés ou avec lesquels ils sont interconnectés et qui sont indispensables à son fonctionnement). Vous n’avez pas à rapporter la preuve de l’existence du défaut de conformité du produit neuf durant les 24 mois suivant sa délivrance.</p>
  </div>
</div>
</section>";
}
?>

<?php
include 'footer.php';
?>
<script type="text/javascript" src="panier.js"></script>
</body>
</html>