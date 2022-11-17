<?php
include 'connectdb.php';
$topsmart = $bdd->query("SELECT * FROM article LIMIT 4;");

session_start();

$user = $_SESSION['user'];

$userinfo = $bdd->query("SELECT * FROM users WHERE id like '". $user ."'");
$data = $userinfo->fetch();





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
if(isset($_GET['deco'])){
  if($_GET['deco'] = 'true'){
   

    unset($_SESSION['user']);
    echo "
    <div id='notif' class='flex p-4 md-1 bg-green-200 rounded-lg' role='alert'>
  <svg aria-hidden='true' class='flex-shrink-0 w-5 h-5 text-green-700 dark:text-green-800' fill='currentColor' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'><path fill-rule='evenodd' d='M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z' clip-rule='evenodd'></path></svg>
  <span class='sr-only'>Info</span>
  <div class='ml-3 text-sm font-medium text-green-700 dark:text-green-800'>Vous êtes bien déconnecté</div>
  <button id='close' type='button' class='ml-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-green-200 dark:text-green-600 dark:hover:bg-green-300' data-dismiss-target='#alert-3' aria-label='Close'>
    <span class='sr-only'>Close</span>
    <svg aria-hidden='true' class='w-5 h-5' fill='currentColor' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'><path fill-rule='evenodd' d='M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z' clip-rule='evenodd'></path></svg>
  </button>
  </div>
    
    ";

  }

}
?>

<?php
include 'navbar.php';
?>

<section class="py-8">
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class="mr-auto place-self-center lg:col-span-7">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl">Votre nouveau smartphone neuf<br> a un <mark class="underline underline-offset-3 decoration-8 decoration-orange-400 bg-white">prix unique</mark></h1>
            <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl ">From checkout to global sales tax compliance, companies around the world use Flowbite to simplify their payment stack.</p>
            <a href="smartphones.php" class="inline-flex bg-orange-500 items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300">
                Nos Smartphones
                <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </div>
        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
            <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/phone-mockup.png" alt="mockup">
        </div>                
    </div>
</section>


<section class="py-8 bg-gray-50">
<div class="ml-auto mr-auto flex flex-col pt-10 max-w-[1200px]">
<h4 class="ml-auto mr-auto text-5xl font-extrabold tracking-tight leading-none text-gray-900">Nos <mark class="px-2 text-white bg-orange-500 rounded">meilleures</mark> ventes :</h4>
<div class="grid py-12 grid-cols-4 gap-10 max-w-[1200px]">
<?php

while($row = $topsmart->fetch()){
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
</section>




<?php
include 'footer.php';
?>
<script src="../node_modules/flowbite/dist/flowbite.js"></script>
<script type="text/javascript" src="script.js"></script>
</body>
</html>