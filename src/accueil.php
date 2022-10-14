<?php
include 'connectdb.php';
$sql = "SELECT * FROM article LIMIT 4;";
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


<nav class="bg-white border-gray-200">
  <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl px-4 md:px-6 py-2.5">
      <a href="#" class="flex items-center">
        <img src="../content/img/logo.png" class="mr-3 h-10" alt="">
        <span class="self-center text-xl font-semibold whitespace-nowrap"></span>
      </a>
      <form class="w-[60%] max-w-[1000px]" action="seach.php" method="get">   
        <div class="relative">
            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </div>
            <input type="text" name="query" id="default-search" class="block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-orange-500 focus:border-orange-500 " placeholder="Essayez Iphone 14, Samsung ...">
            <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-orange-500 hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-4 py-2">Rechercher</button>
        </div>
      </form>
      <div class="flex items-center">
        <button type="button" class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-orange-700 focus:z-10 focus:ring-4 focus:ring-gray-200">S'inscrire</button>
        <button type="button" class="text-white bg-orange-500 hover:bg-orange-800 focus:ring-4 focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Connexion</button>
      </div>
  </div>
</nav>
<nav class="bg-gray-50">
  <div class="py-3 px-4 mx-auto max-w-screen-xl md:px-6">
      <div class="flex items-center">
          <ul class="flex flex-row mt-0 mr-6 space-x-8 text-sm font-medium">
              <li>
                  <a href="#" class="text-gray-900 " aria-current="page">Accueil</a>
              </li>
              <li>
                  <a href="#" class="text-gray-900">Smartphones</a>
              </li>
              <li>
                  <a href="#" class="text-gray-900 ">Garantie</a>
              </li>
              <li>
                  <a href="#" class="text-gray-900 ">A propos</a>
              </li>
          </ul>
      </div>
  </div>
</nav>


<section class="bg-white dark:bg-gray-900">
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class="mr-auto place-self-center lg:col-span-7">
            <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">Payments tool for software companies</h1>
            <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">From checkout to global sales tax compliance, companies around the world use Flowbite to simplify their payment stack.</p>
            <a href="#" class="inline-flex bg-orange-500 items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                Get started
                <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
            <a href="#" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                Speak to Sales
            </a> 
        </div>
        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
            <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/phone-mockup.png" alt="mockup">
        </div>                
    </div>
</section>

<div class="ml-auto mr-auto flex flex-col pt-10 max-w-[1200px]">

<div class="grid py-12 grid-cols-4 gap-10 max-w-[1200px]">
    <?php

while($row = $result->fetch_assoc()){
 echo "<div class='w-60 h-80 rounded-lg bg-gray-50 drop-shadow-lg flex flex-col justify-center'>
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
</div>";

}

?>

</div>
</div>

<footer class="p-4 bg-white drop-shadow-lg rounded-lg shadow md:px-6 md:py-8">
    <div class="sm:flex sm:items-center sm:justify-between">
        <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0">
      <img src="../content/img/logo.png" class="mr-3 h-10" alt="">
            <span class="self-center text-2xl font-semibold whitespace-nowrap"></span>
        </a>
        <ul class="flex flex-wrap items-center mb-6 text-sm text-gray-500 sm:mb-0">
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6 ">About</a>
            </li>
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
            </li>
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6 ">Licensing</a>
            </li>
            <li>
                <a href="#" class="hover:underline">Contact</a>
            </li>
        </ul>
    </div>
    <hr class=" border-gray-200 my-7">
</footer>




</body>
</html>