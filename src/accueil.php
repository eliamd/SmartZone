<?php
include 'connectdb.php';
$topsmart = $bdd->query("SELECT * FROM article LIMIT 4;");

session_start();


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
                <h1
                    class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl">
                    Votre nouveau smartphone neuf<br> a un <mark
                        class="underline underline-offset-3 decoration-8 decoration-orange-400 bg-white">prix
                        unique</mark></h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl ">Envie de faire de
                    sérieuses économies sur votre futur smartphone ? Grâce à SmartZone obtenez un nouveau smartphone
                    neuf au prix le plus bas du marché avec une expérience unique.</p>
                <a href="smartphones.php"
                    class="inline-flex bg-orange-500 items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300">
                    Nos Smartphones
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="../content/img/phone-mockup.png" alt="mockup">
            </div>
        </div>
    </section>


    <section class="py-8 bg-gray-50">
        <div class="ml-auto mr-auto flex flex-col pt-10 max-w-[1200px]">
            <h4 class="ml-auto mr-auto text-5xl font-extrabold tracking-tight leading-none text-gray-900">Nos <mark
                    class="px-2 text-white bg-orange-500 rounded">meilleures</mark> ventes :</h4>
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

    <section class="my-20">

        <div class="w-full p-4 text-center bg-white  rounded-lg sm:p-8 dark:bg-gray-800 dark:border-gray-700">
            <h5 class="mb-2 text-3xl font-bold text-gray-900 dark:text-white">Télécharger notre application</h5>
            <p class="mb-5 text-base text-gray-500 sm:text-lg dark:text-gray-400">Téléchargez notre application mobile
                SmartZone disponible pour iPhone et Android</p>
            <div class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4">
                <a href="#"
                    class="w-full sm:w-auto bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                    <svg class="mr-3 w-7 h-7" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="apple"
                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                        <path fill="currentColor"
                            d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z">
                        </path>
                    </svg>
                    <div class="text-left">
                        <div class="mb-1 text-xs">Télécharger sur le</div>
                        <div class="-mt-1 font-sans text-sm font-semibold">App Store</div>
                    </div>
                </a>
                <a href="#"
                    class="w-full sm:w-auto bg-gray-800 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                    <svg class="mr-3 w-7 h-7" aria-hidden="true" focusable="false" data-prefix="fab"
                        data-icon="google-play" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor"
                            d="M325.3 234.3L104.6 13l280.8 161.2-60.1 60.1zM47 0C34 6.8 25.3 19.2 25.3 35.3v441.3c0 16.1 8.7 28.5 21.7 35.3l256.6-256L47 0zm425.2 225.6l-58.9-34.1-65.7 64.5 65.7 64.5 60.1-34.1c18-14.3 18-46.5-1.2-60.8zM104.6 499l280.8-161.2-60.1-60.1L104.6 499z">
                        </path>
                    </svg>
                    <div class="text-left">
                        <div class="mb-1 text-xs">Entrez dans</div>
                        <div class="-mt-1 font-sans text-sm font-semibold">Google Play</div>
                    </div>
                </a>
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