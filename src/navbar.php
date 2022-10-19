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