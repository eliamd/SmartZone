<?php

require_once 'connectdb.php';

session_start();

$user = $_SESSION['user'];

$userinfo = $bdd->query("SELECT * FROM users WHERE id like '". $user ."'");
$data = $userinfo->fetch();
?>
<nav class="bg-white border-gray-200">
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl px-4 md:px-6 py-2.5">
        <a href="accueil.php" class="flex items-center">
          <img src="../content/img/logo.png" class="mr-3 h-10" alt="">
          <span class="self-center text-xl font-semibold whitespace-nowrap"></span>
        </a>
        <form class="w-[60%] max-w-[1000px]" action="seach.php" method="get">   
          <div class="relative">
              <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                  <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
              </div>
              <input type="text" name="query" pattern='[a-zA-Z0-9 ]{1,}' id="default-search" class="block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-orange-500 focus:border-orange-500 " placeholder="Essayez Iphone 14, Samsung ...">
              <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-orange-500 hover:bg-orange-800 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-sm px-4 py-2">Rechercher</button>
          </div>
        </form>
        <?php
        
        if(isset($_SESSION['user'])){
            echo "
            
            <div class='flex items-center justify-between'>

              <a href='panier.php'>
              <button type='button' class='inline-flex relative right-6 items-center p-3 text-sm font-medium text-center text-gray-500  rounded-lg hover:text-gray-400'>
                <svg xmlns='http://www.w3.org/2000/svg' width='25' height='25' fill='currentColor' class='bi bi-cart-fill' viewBox='0 0 16 16'> <path d='M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z'/> </svg><div class='flex relative'>
                  <div class='cartnbr inline-flex absolute -top-6 -right-4 justify-center items-center w-6 h-6 text-xs font-bold text-white bg-red-500 rounded-full border-2 border-white dark:border-gray-900'>0</div>
              </button>
            </a>

                <div>
                    <button id='dropdownAvatarNameButton' data-dropdown-toggle='dropdownAvatarName' class='flex items-center text-sm font-medium text-gray-900 rounded-full hover:text-blue-600 dark:hover:text-blue-500 md:mr-0 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-white' type='button'>
                        <span class='sr-only'>Open user menu</span>
                        <img class='mr-2 w-8 h-8 rounded-full' src='../content/img/avatar.jpeg' alt='user photo'>
                        " . ucfirst($data['prenom']) . " ". ucfirst($data['nom']) . "
                        <svg class='w-4 h-4 mx-1.5' aria-hidden='true' fill='currentColor' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'><path fill-rule='evenodd' d='M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z' clip-rule='evenodd'></path></svg>
                    </button>
                    
                    <!-- Dropdown menu -->
                    <div id='dropdownAvatarName' class='hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600'>
                        <div class='py-3 px-4 text-sm text-gray-900 dark:text-white'>
                          <div class='truncate'>" . $data['email'] ."</div>
                        </div>
                        <ul class='py-1 text-sm text-gray-700 dark:text-gray-200' aria-labelledby='dropdownInformdropdownAvatarNameButtonationButton'>
                          <li>
                            <a href='gestion.php' class='block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white'>Tableau de bord</a>
                          </li>

                        </ul>
                        <div class='py-1'>
                          <a href='accueil.php?deco=true' class='block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white'>Deconnexion</a>
                        </div>
                    </div>
                    </div>
            </div>
            
            ";  
        }else{
            echo "
            
            <a href='panier.php'>
            <button type='button' class='inline-flex relative items-center p-3 text-sm font-medium text-center text-gray-500  rounded-lg hover:text-gray-400'>
              <svg xmlns='http://www.w3.org/2000/svg' width='25' height='25' fill='currentColor' class='bi bi-cart-fill' viewBox='0 0 16 16'> <path d='M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z'/> </svg><div class='flex relative'>
                <div class='cartnbr inline-flex absolute -top-6 -right-4 justify-center items-center w-6 h-6 text-xs font-bold text-white bg-red-500 rounded-full border-2 border-white dark:border-gray-900'>0</div>
            </button>
            </a>
            

            <div class='flex items-center'>
            <a href='inscription.php'>
            <button type='button' class='py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-orange-700 focus:z-10 focus:ring-4 focus:ring-gray-200'>S'inscrire</button>
            </a>
            <a href='connexion.php'>
                <button type='button' class='text-white bg-orange-500 hover:bg-orange-800 focus:ring-4 focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2'>Connexion</button>
            </a>
            </div>
            
            ";
        }
        
        ?>   
    </div>
  </nav>
  <nav class="bg-gray-50">
    <div class="py-3 px-4 mx-auto max-w-screen-xl md:px-6">
        <div class="flex items-center">
            <ul class="flex flex-row mt-0 mr-6 space-x-8 text-sm font-medium">
                <li>
                    <a href="accueil.php" class="text-gray-900 " aria-current="page">Accueil</a>
                </li>
                <li>
                    <a href="smartphones.php" class="text-gray-900">Smartphones</a>
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
  <script src="panieraff.js"></script>
  <script src="../node_modules/flowbite/dist/flowbite.js"></script>
